<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    
        
    /**
     * Mass Assignment Rules
     * 
     * @var array
     */
    $fillable = [
        'label',
        'description',
        'status',
    ];

    $casts = [
        'status',        
    ];

}
