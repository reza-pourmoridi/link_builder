<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pricesModel extends Model
{
    protected $table = 'prices_tb';
    protected $fillable = [
        'title', 'link'
    ];
    const UPDATED_AT = null;
    const CREATED_AT = null;
}
