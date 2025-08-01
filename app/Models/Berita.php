<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita'; // Nama tabel

    protected $fillable = [
        'foto_kegiatan',
        'judul',
        'deskripsi',
        'isi_berita',
        'tanggal_berita',
    ];

}
