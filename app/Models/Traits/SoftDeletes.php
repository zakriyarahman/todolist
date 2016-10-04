<?php

namespace App\Models\Traits;

trait SoftDeletes
{
    protected $dates = ['deleted_at'];
}
