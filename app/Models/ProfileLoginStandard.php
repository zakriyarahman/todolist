<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileLoginStandard extends Model
{
    $fillable=[
    	'username',
    	'password',
    	'password_token',
    	'',
    ];
}
