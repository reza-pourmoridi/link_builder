<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article_cats extends Model
{
    protected $table = 'article_cats_tb';
    protected $fillable = [
        'title', 'description'
    ];
    const UPDATED_AT = null;
    const CREATED_AT = null;
}
