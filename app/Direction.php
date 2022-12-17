<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{

    protected $fillable = [
        'name', 'number',
    ];

    public function directions()
    {
        return $this->belongsTo('App\Students');
    }
}
