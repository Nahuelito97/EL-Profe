<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asistence extends Model
{   
    use SoftDeletes;
    protected $fillable = [
        'status',
    ];
}
