<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accountant extends Model
{
    protected $fillable = [
        'id' 	,'title' 	,'logo'
    ];
    const UPDATED_AT = null;
    const CREATED_AT = null;
}
