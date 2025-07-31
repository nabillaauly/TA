<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\recmawa;
use App\Models\rekomawa;
use Illuminate\Http\Request;

class RecMawaController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $recmawas = recmawa::with('AdminOrmawa')->where('AdminOrmawa_id', $user->id)->first();
        if (!$recmawas) {
            return redirect()->route('ormawa.Riwayat_pendaftaran');
        }
        return view('ormawa.Riwayat_pendaftaran', compact('recmawas'));
    }

    public function show()
    {
        $user = Auth::user();

        $show = rekomawa::with('AdminOrmawa')->where('AdminOrmawa_id', $user->id)->first();
        if (!$show) {
            return redirect()->route('ormawa.recomendation');
        }
        return view('ormawa.show_recomendation', compact('show'));
    }

    public function riwayat()
    {        
        $user = Auth::user(); // Ambil user yang sedang login

        // Ambil data recruitment hanya untuk UKM yang dimiliki admin yang sedang login
        $recmawas = recmawa::with('AdminOrmawa')->where('AdminOrmawa_id', $user->id)->get();

        return view('ormawa.Riwayat_pendaftaran', compact('recmawas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'nim' => 'required|integer',
            'email' => 'required|string',
            'phone' => 'nullable|string',
            'study_program' => 'required|string',
            'semester' => 'required|integer',
            'gender' => 'required|in:Male,Female',
            'reason' => 'required|string',
            'photo' => 'nullable|string',
            'AdminOrmawa_id' => 'required|integer|exists:ormawa,AdminOrmawa_id',
        ]);

        // Ambil Adminukm_id dari tabel ukm berdasarkan ukm_id yang dipilih
        $ormawa = \App\Models\ormawa::where('AdminOrmawa_id', $validated['AdminOrmawa_id'])->first();

        if (!$ormawa) {
            return redirect()->back()->with('error', 'ORMAWA tidak ditemukan.');
        }

        // Tambahkan AdminOrmawa_id ke dalam data yang akan disimpan
        $validated['AdminOrmawa_id'] = $ormawa->AdminOrmawa_id;

        recmawa::create($validated);

        return redirect()->route('recruitment')->with('success', 'Berhasil mendaftar.');
    }
}
