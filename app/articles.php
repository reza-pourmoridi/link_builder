<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    protected $table = 'articles_tb';
    protected $fillable = [
        'title', 'cat_id', 'description', 'pic'
    ];
    const UPDATED_AT = null;
    const CREATED_AT = null;
}
