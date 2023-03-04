<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class site_types extends Model
{
    protected $table = 'site_types_tb';
    protected $fillable = [
        'title', 'slug'
    ];
    const UPDATED_AT = null;
    const CREATED_AT = null;
}
