<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
    /** @use HasFactory<\Database\Factories\ContestFactory> */
    use HasFactory;

    protected $table = 'contests';

    protected $fillable = [
        'title',
        'description',
        'start_at',
        'end_at',
        'is_announced',
    ];
}
