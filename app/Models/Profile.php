<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    
    /**
     * Mass Assignment Rules
     * 
     * @var array
     */
    $fillable = [
    	'status',
    ];

    /**
     * Always casts these attributes
     * 
     * @var array
     */
    $casts = [
    	'status',
    ]
}
