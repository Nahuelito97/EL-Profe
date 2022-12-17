<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $fillable = [
        'name',
    ];

    public function pais()
    {
        return $this->belongsTo('App\Students');
    }
}
