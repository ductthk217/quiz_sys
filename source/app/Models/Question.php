<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'content',
        'score',
        'type',
        'status',
        'created_by',
    ];

    protected $hidden = [
        'deleted_at',
    ];

    protected $casts = [
        'score' => 'float',
        'category_id' => 'integer',
        'created_by' => 'integer',
        'type' => 'string',
        'status' => 'string',
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
}
