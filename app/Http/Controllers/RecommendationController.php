<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UKM;
use App\Models\recomendation;

class RecommendationController extends Controller
{

    public function index ()
    {
        return view('ukm.recomendation');
    }
    
    // Mapping opsi untuk masing-masing field (sesuai dengan form)
    private $mappings = [
        // 'interest' => ['Musik', 'Olahraga', 'Seni', 'Sastra', 'Teknologi', 'Sosial', 'Kewirausahaan'],
        'activity_type' => ['Kompetisi', 'Kolaborasi Tim', 'Kegiatan Fisik', 'Kreativitas', 'Sosial', 'Pengabdian Masyarakat'],
        'community_size' => ['Kecil', 'Sedang', 'Besar'],
        'preferred_time' => ['Pagi', 'Sore', 'Malam', 'Akhir Pekan', 'Fleksibel'],
        'question1'  => ['Pengatur strategi','Pelaksana teknis','Pencatat/pendokumentasi','Tidak ada peran tertentu, tergantung situasi'],
        'question2'  => ['Duduk dan menikmati sebagai peserta','Membantu di belakang layar','Jadi pembicara/moderator/panitia inti','Mengamati dan mencatat hal-hal menarik'],
        'question3'  => ['Membangun jaringan/relasi','Menambah pengalaman','Melatih soft skill','Meningkatkan CV/portofolio'],
        'question4'  => ['Tidak pernah','Kadang-kadang (sekali-dua kali sebulan)','Cukup sering (sekali seminggu)','Sangat sering (lebih dari sekali seminggu)'],
        'question5'  => ['1–3 jam','4–7 jam','8–12 jam','Lebih dari 12 jam'],
        'question6'  => ['memimpin dan mengarahkan','mengikuti pemimpin yang jelas','Semua orang bekerja setara, tanpa pemimpin tetap','bekerja sendiri, tidak terlalu suka kerja kelompok'],
        'question7'  => ['Keseruan dan kebersamaan','Peluang belajar hal baru','Rasa tenang dan pengembangan diri','Ruang untuk eksplorasi minat pribadi'],
        'question8'  => ['Mengambilnya dengan semangat','Mengerjakannya sesuai arahan','Delegasikan jika tidak yakin','Lebih suka tugas kecil atau ringan'],
        'question9'  => ['Terstruktur dan rapi','Fleksibel dan spontan','Tergantung suasana hati','Tegas dan disiplin'],
        'question10'  => ['Lebih percaya diri','Lebih kreatif','Lebih teratur dan disiplin','Lebih dikenal banyak orang'],
        'question11'  => ['Sangat besar, siap aktif penuh','Cukup besar, asal sesuai jadwal','Sedang, tergantung beban kuliah','Kecil, ikut saat sempat'],
        'question12'  => ['Meningkatkan skill tertentu','Dapat pengalaman organisasi','Lebih kenal banyak orang','Dapat sertifikat/penghargaan'],
        'question13'  => ['Sangat sering','Sering','Kadang-kadang','Jarang'],
        'question14'  => ['Ada banyak interaksi dan diskusi','Lebih banyak praktik langsung','Lebih banyak eksplorasi mandiri','Fokus pada tugas yang jelas'],
    ];

    /**
     * Simpan data admin UKM ke database.
     */
    public function storeAdmin(Request $request)
    {
        $validatedData = $request->validate([
            'nama'               => 'required|string',
            // 'interest'           => 'required|string',
            'activity_type'      => 'required|string',
            'community_size'     => 'required|string',
            'preferred_time'     => 'required|string',
            'question1' => 'required|string',
            'question2' => 'required|string',
            'question3' => 'required|string',
            'question4' => 'required|string',
            'question5' => 'required|string',
            'question6' => 'required|string',
            'question7' => 'required|string',
            'question8' => 'required|string',
            'question9' => 'required|string',
            'question10' => 'required|string',
            'question11' => 'required|string',
            'question12' => 'required|string',
            'question13' => 'required|string',
            'question14' => 'required|string',
           
        ]);

        // Pastikan Adminukm_id terisi. Contoh: mengambil dari user yang sedang login.
        // Jika tidak menggunakan autentikasi, Anda bisa menggantinya dengan nilai statis atau data lain.
        $validatedData['Adminukm_id'] = auth()->id(); 

        // Simpan ke database
        $recomendation = recomendation::create($validatedData);

        return view('ukm.recomendation', compact('recomendation'));

        // return response()->json([
        //     'message' => 'Data admin UKM berhasil disimpan',
        //     'data'    => $recomendation
        // ]);
    }

    public function match(Request $request)
    {
        $validatedData = $request->validate([
            // 'interest'           => 'required|string',
            'activity_type'      => 'required|string',
            'community_size'     => 'required|string',
            'preferred_time'     => 'required|string',
            'organizer_interest' => 'required|string',
            'skills' => 'required|string',
            'social_activity' => 'required|string',
            'question1' => 'required|string',
            'question2' => 'required|string',
            'question3' => 'required|string',
            'question4' => 'required|string',
            'question5' => 'required|string',
            'question6' => 'required|string',
            'question7' => 'required|string',
            'question8' => 'required|string',
            'question9' => 'required|string',
            'question10' => 'required|string',
            'question11' => 'required|string',
            'question12' => 'required|string',
            'question13' => 'required|string',
            'question14' => 'required|string',
        ]);

        // Buat vector one-hot untuk data user
        $userVector = $this->createOneHotVector($validatedData);

        // Ambil seluruh data admin UKM
        $admins = recomendation::all();

        $recommendations = [];

        foreach ($admins as $admin) {
            // Buat array data admin sesuai key mapping
            $adminData = [
                // 'interest'           => $admin->interest,
                'activity_type'      => $admin->activity_type,
                'community_size'     => $admin->community_size,
                'preferred_time'     => $admin->preferred_time,
                'organizer_interest' => $admin->organizer_interest,
                'skills'             => $admin->skills,
                'social_activity'    => $admin->social_activity,
                'question1'          => $admin->question1,
                'question2'          => $admin->question2,
                'question3'          => $admin->question3,
                'question4'          => $admin->question4,
                'question5'          => $admin->question5,
                'question6'          => $admin->question6,
                'question7'          => $admin->question7,
                'question8'          => $admin->question8,
                'question9'          => $admin->question9,
                'question10'         => $admin->question10,
                'question11'         => $admin->question11,
                'question12'         => $admin->question12,
                'question13'         => $admin->question13,
                'question14'         => $admin->question14,
                
            ];

            $adminVector = $this->createOneHotVector($adminData);

            // Hitung cosine similarity antara vector user dan admin
            $similarity = $this->cosineSimilarity($userVector, $adminVector);

            $recommendations[] = [
                'adminukm_id' => $admin->id,
                'nama'        => $admin->nama,
                'score'       => round($similarity, 4)
            ];
        }

        // Urutkan berdasarkan skor tertinggi
        usort($recommendations, function ($a, $b) {
            return $b['score'] <=> $a['score'];
        });

        return response()->json([
            'message'         => 'Rekomendasi berdasarkan cosine similarity',
            'recommendations' => $recommendations
        ]);
    }

    /**
     * Mengubah data kategorikal ke one-hot vector berdasarkan mapping.
     *
     * @param array $data => key: nama field, value: pilihan
     * @return array => vektor numerik (array of integers)
     */
    private function createOneHotVector(array $data)
    {
        $vector = [];
        foreach ($this->mappings as $field => $options) {
            // Inisialisasi one-hot vector untuk field ini (panjang sama dengan jumlah opsi)
            $oneHot = array_fill(0, count($options), 0);
            // Cari index pilihan pada mapping
            $answer = $data[$field] ?? null;
            $index = array_search($answer, $options);
            if ($index !== false) {
                $oneHot[$index] = 1;
            }
            // Gabungkan one-hot vector untuk field ini ke vector utama
            $vector = array_merge($vector, $oneHot);
        }
        return $vector;
    }

    /**
     * Hitung cosine similarity antara dua vector.
     *
     * @param array $vec1
     * @param array $vec2
     * @return float
     */
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