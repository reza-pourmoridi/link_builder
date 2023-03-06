<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable = [
        'id' 	,'name' 	,'company' 	,'staff_id' ,'providers'	,'logo'
    ];
    const UPDATED_AT = null;
    const CREATED_AT = null;
}
