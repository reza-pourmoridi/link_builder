<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chosen_item extends Model
{
    protected $fillable = [
        'item_model', 'customer_id','item_id'
    ];
    const UPDATED_AT = null;
    const CREATED_AT = null;
}
