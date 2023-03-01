<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seting extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
    ];

}
