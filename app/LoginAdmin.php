<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginAdmin extends Model
{
    protected $table = 'login_admins';

    protected $fillable = [
        'user_name'
    ];
    const UPDATED_AT = null;
    const CREATED_AT = null;
}
