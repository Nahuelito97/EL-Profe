<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $fillable = [
        'name', 'cod_post',
    ];

    public function localidad()
    {
        return $this->belongsTo('App\Students');
    }
}
