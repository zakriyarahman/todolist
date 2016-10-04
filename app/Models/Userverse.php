<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userverse extends Model
{
    
    /**
     * Mass Assignment Rules
     * 
     * @var array
     */
    $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'suffix',
        'preferred_name',
    ];
}
