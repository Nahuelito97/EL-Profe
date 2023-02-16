<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincies extends Model
{
    protected $fillable = [
        'name',
        'pais_id'
    ];

    public function pais()
    {
        return $this->belongsTo('App\Pais');
    }
}
