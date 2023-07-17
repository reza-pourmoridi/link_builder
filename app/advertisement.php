<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class advertisement extends Model
{
    protected $table = 'advertisement_tb';
    protected $fillable = [
        'title', 'link', 'pic'
    ];
    const UPDATED_AT = null;
    const CREATED_AT = null;
}
