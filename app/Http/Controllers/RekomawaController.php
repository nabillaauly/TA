<?php

namespace App\Http\Controllers;
use App\Models\rekomawa;
use Illuminate\Http\Request;

class RekomawaController extends Controller
{
    private $mappings = [
        'question1'  => ['Ya','Tidak'],
        'question2'  => ['Organisasi pengembangan jiwa kepemimpinan','Organisasi pengembangan minat bakat ( seni, olahraga, literasi, teknologi)'],
        'question3'  => ['Lingkungan yang mendukung dan positif','Peluang belajar dan berkembang','Kesempatan untuk menunjukkan hasil atau prestasi','Ruang untuk mengekspresikan ide'],
        'question4'  => ['Kompetisi','Kolaborasi Tim','Kegiatan Fisik','Kreativitas','Sosial','Pengabdian Masyarakat'],
        'question5'  => ['Komitmen Besar','Cukup Besar','Sedang','Kecil'],
        'question6'  => ['Sering','Cukup','Kadang-kadang'],
        'question7'  => ['Besar','Cukup','Biasa saja','Tidak tertarik'],
        'question8'  => ['Membangun jaringan/relasi','Menambah pengalaman','Melatih soft skill','Meningkatkan CV/portofolio'],
        'question9'  => ['Pengembangan diri','Belajar hal baru','Eksplorasi minat','Keseruan dan kebersamaan'],
    ];

    // Tambahkan bobot
    protected $weights = [
        'question1' => 1, 
        'question2' => 1, 
        'question3' => 1, 
        'question4' => 1, 
        'question5' => 1,
        'question6' => 1, 
        'question7' => 2, 
        'question8' => 1, 
        'question9' => 2, 
    ];

    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'nama'      => 'required|string',
            'question1' => 'required|string',
            'question2' => 'required|string',
            'question3' => 'required|string',
            'question4' => 'required|string',
            'question5' => 'required|string',
            'question6' => 'required|string',
            'question7' => 'required|string',
            'question8' => 'required|string',
            'question9' => 'required|string',
        ]);

        $validatedData['AdminOrmawa_id'] = auth()->id(); 

        $show = rekomawa::create($validatedData);

        return view('ormawa.show_recomendation', compact('show'));
    }

    public function match(Request $request)
    {
        $validatedData = $request->validate([
            'question1' => 'required|string',
            'question2' => 'required|string',
            'question3' => 'required|string',
            'question4' => 'required|string',
            'question5' => 'required|string',
            'question6' => 'required|string',
            'question7' => 'required|string',
            'question8' => 'required|string',
            'question9' => 'required|string',
        ]);

        $userVector = $this->createOneHotVector($validatedData);
        $admins = rekomawa::all();
        $recommendations = [];

        foreach ($admins as $admin) {
            $adminData = [
                'question1' => $admin->question1,
                'question2' => $admin->question2,
                'question3' => $admin->question3,
                'question4' => $admin->question4,
                'question5' => $admin->question5,
                'question6' => $admin->question6,
                'question7' => $admin->question7,
                'question8' => $admin->question8,
                'question9' => $admin->question9,
            ];

            $adminVector = $this->createOneHotVector($adminData);
            $similarity = $this->cosineSimilarity($userVector, $adminVector);

            $recommendations[] = [
                'AdminOrmawa_id' => $admin->id,
                'nama'           => $admin->nama,
                'score'          => round($similarity, 4)
            ];
        }

        usort($recommendations, fn($a, $b) => $b['score'] <=> $a['score']);

        // Tambahkan nomor urut
        foreach ($recommendations as $i => &$item) {
            $item['no'] = $i + 1;
        }

        return response()->json([
            'message'         => 'Rekomendasi berdasarkan cosine similarity',
            'recommendations' => $recommendations
        ]);
    }

    private function createOneHotVector(array $data)
    {
        $vector = [];

        foreach ($this->mappings as $field => $options) {
            $oneHot = array_fill(0, count($options), 0);
            $answer = $data[$field] ?? null;
            $index = array_search($answer, $options);
            if ($index !== false) {
                $weight = $this->weights[$field] ?? 1;
                $oneHot[$index] = 1 * $weight;
            }
            $vector = array_merge($vector, $oneHot);
        }

        return $vector;
    }

    private function cosineSimilarity(array $vec1, array $vec2)
    {
        $dotProduct = 0;
        $normVec1 = 0;
        $normVec2 = 0;

        foreach ($vec1 as $i => $value) {
            $dotProduct += $value * $vec2[$i];
            $normVec1 += $value * $value;
            $normVec2 += $vec2[$i] * $vec2[$i];
        }

        if ($normVec1 == 0 || $normVec2 == 0) {
            return 0;
        }

        return $dotProduct / (sqrt($normVec1) * sqrt($normVec2));
    }
}
