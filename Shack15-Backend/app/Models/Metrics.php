<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Metrics extends Model
{
    use HasFactory;

    protected $table = 'metrics';

    /* Allow mass assignment for these fields */
    protected $fillable = [
        'total_members',
        'active_members',
        'events',
    ];

    /* Cast events to an array when retrieved */
    protected $casts = [
        'events' => 'array',
    ];
}
