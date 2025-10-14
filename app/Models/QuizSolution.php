<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizSolution extends Model
{
    use HasFactory;
    protected $table = "kviz_valaszok";

    protected $fillable = ['solution']; // ← EZ A FONTOS RÉSZ!

    protected $casts = [
        'solution' => 'array',
    ];

}
