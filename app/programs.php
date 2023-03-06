<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programs extends Model
{
    protected $table = 'programs_tb';
    protected $fillable = [
        'title', 'link'
    ];
    const UPDATED_AT = null;
    const CREATED_AT = null;
}
