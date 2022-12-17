<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincies extends Model
{
    protected $fillable = [
        'name',
    ];

    public function provincies()
    {
        return $this->belongsTo('App\Students');
    }
}
