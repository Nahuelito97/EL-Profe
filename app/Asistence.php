<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistence extends Model
{

    public static $status = [
        'Presente' => 'Presente',
        'Ausente' => 'Ausente',
        'Tardanza' => 'Tardanza',
    ];

    protected $fillable = [
        'status',
    ];


    public function estado()
    {
        return $this->belongsToMany('App\Students');
    }

}
