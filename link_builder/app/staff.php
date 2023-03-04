<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    protected $table = 'staff_tb';
    protected $fillable = [
        'id', 	'name', 	'position', 	'photo', 	'email', 	'instagram' ,	'whatsapp', 	'linkdin'
    ];
    const UPDATED_AT = null;
    const CREATED_AT = null;

}
