<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class works extends Model
{
    protected $table = 'works_tb';
    protected $fillable = [
        'title', 'link', 'kind'
    ];
    const UPDATED_AT = null;
    const CREATED_AT = null;
}
