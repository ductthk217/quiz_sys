<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionCategory extends Model
{
    use HasFactory;

    // Các cột được phép mass-assign
    protected $fillable = [
        'name', 
        'description',
    ];
}
