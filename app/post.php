<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo', 'banner', 'name', 'title', 'description', 'country', 'city', 'user_name', 'date'
    ];
}
