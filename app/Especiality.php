<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Especiality extends Model
{


    protected $fillable = [
        'name',
    ];
}
