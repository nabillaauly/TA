<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class recomendation extends Model
{
    use HasFactory;

    protected $table = 'recomendation';

    protected $fillable = [
        'Adminukm_id',
        'nama',
        // 'interest',
        'activity_type',
        'community_size',
        'preferred_time',
        'organizer_interest',
        'skills',
        'social_activity',
        'question1',
        'question2',
        'question3',
        'question4',
        'question5',
        'question6',
        'question7',
        'question8',
        'question9',
        'question10',
        'question11',
        'question12',
        'question13',
        'question14',
    ];

    public function Adminukm()
    {
        return $this->belongsTo(User::class, 'Adminukm_id');
    }
}
