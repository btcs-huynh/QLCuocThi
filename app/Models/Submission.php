<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    /** @use HasFactory<\Database\Factories\SubmissionFactory> */
    use HasFactory;

    protected $table = 'submissions';

    protected $fillable = [
        'contest_id',
        'user_id',
        'title',
        'content_text',
        'content_file',
    ];
}
