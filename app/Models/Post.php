<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
        'name',
        'title',
        'user_id',
        'category_id',
    ];
    use HasFactory;
}
