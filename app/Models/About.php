<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'about'; // Nama tabel

    protected $fillable = [
        'user_id',
        'nama_organisasi',
        'logo',
        'slogan',
        'tentang_kami',
        'email',
        'nomer_telepon',
        'lokasi',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
