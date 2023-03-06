<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faq extends Model
{
    protected $table = 'faq_tb';
    protected $fillable = [
        'title', 'link', 'kind'
    ];
    const UPDATED_AT = null;
    const CREATED_AT = null;
}
