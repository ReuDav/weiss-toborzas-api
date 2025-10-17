<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'kviz_feedback';

    protected $fillable = [
        'feedback',
        'star_count',
    ];
}
