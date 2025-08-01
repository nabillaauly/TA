<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoKegiatan extends Model
{
    use HasFactory;

    protected $table = 'foto_kegiatan'; // Nama tabel

    protected $fillable = [
        'user_id',
        'foto_kegiatan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
