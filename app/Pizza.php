<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    //if Table name is not same as Model
    // protected $table = 'specific_table';

    protected $casts = [
        'toppings' => 'array'
    ];
}
