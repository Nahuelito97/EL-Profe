<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    protected $fillable = [
        'id',
        'caracteristica',
        'numero',
    ];

}
