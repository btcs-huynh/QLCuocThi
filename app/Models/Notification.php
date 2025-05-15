<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    /** @use HasFactory<\Database\Factories\NotificationFactory> */
    use HasFactory;

    const UPDATED_AT = null;

    protected $table = 'notifications';

    protected $fillable = [
        'contest_id',
        'message',
    ];
}
