<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'is_completed'];

    // Ensure is_completed is always treated as a boolean
    protected $casts = [
        'is_completed' => 'boolean',
    ];

    // Default values (optional)
    protected $attributes = [
        'is_completed' => false,
    ];
}
