<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class demo extends Model
{
    protected $table = 'demo_tb';
    protected $fillable = [
        'title', 'link'
    ];
    const UPDATED_AT = null;
    const CREATED_AT = null;
}
