<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UKM;
use App\Models\recomendation;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class RecommendationController extends Controller
{
    public function index()
    {
        return view('ukm.recomendation');
    }

    public function show()
    {
        $user = Auth::user();

        $show = recomendation::with('Adminukm')->where('Adminukm_id', $user->id)->first();
        if (!$show) {
            return redirect()->route('ukm.recomendation');
        }
        return view('ukm.show_recomendation', compact('show'));
    }

    public function ormawa()
    {
        return view('ormawa.recomendation');
    }

    // Mapping opsi untuk masing-masing field (sesuai dengan form)
    private $mappings = [
        'question1' => ['Ya', 'Tidak'],
        'question2' => ['Organisasi pengembangan jiwa kepemimpinan', 'Organisasi pengembangan minat bakat ( seni, olahraga, literasi, teknologi)'],
        'question3' => ['Lingkungan yang mendukung dan positif', 'Peluang belajar dan berkembang', 'Kesempatan untuk menunjukkan hasil atau prestasi', 'Ruang untuk mengekspresikan ide'],
        'question4' => ['Kompetisi', 'Kolaborasi Tim', 'Kegiatan Fisik', 'Kreativitas', 'Sosial', 'Pengabdian Masyarakat'],
        'question5' => ['Komitmen Besar', 'Cukup Besar', 'Sedang', 'Kecil'],
        'question6' => ['Sering', 'Cukup', 'Kadang-kadang'],
        'question7' => ['Besar', 'Cukup', 'Biasa saja', 'Tidak tertarik'],
        'question8' => ['Membangun jaringan/relasi', 'Menambah pengalaman', 'Melatih soft skill', 'Meningkatkan CV/portofolio'],
        'question9' => ['Pengembangan diri', 'Belajar hal baru', 'Eksplorasi minat', 'Keseruan dan kebersamaan'],
    ];

    // Bobot untuk masing-masing field
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

    public function storeAdmin(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string',
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

        $validatedData['Adminukm_id'] = auth()->id();

        $show = recomendation::create($validatedData);

        return view('ukm.show_recomendation', compact('show'));
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

        $admins = recomendation::all();
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

             // Tambahkan log ini
            //  \Log::info("Similarity dengan {$admin->nama}: {$similarity}");
            Log::info('User Vector:', $userVector);
            Log::info('Recommendations:', $recommendations);

            $recommendations[] = [
                'adminukm_id' => $admin->id,
                'nama' => $admin->nama,
                'score' => round($similarity, 4)
            ];
        }

        //Menyusun rekomendasi dari cosine similarity tertinggi-terendah
        usort($recommendations, fn($a, $b) => $b['score'] <=> $a['score']);

        // Menambahkan nomor urut (ranking)
        foreach ($recommendations as $index => &$rec) {
            $rec['rank'] = $index + 1;
        }
        unset($rec); // Hindari reference leak

        // Hasil ditampilkan dalam bentuk JSON
        return response()->json([
            'message' => 'Rekomendasi berdasarkan cosine similarity',
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

    //Perhitungan rekomendasinya
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
