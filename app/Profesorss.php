<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profesorss extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'surname',
        'dni',
        'date_of_birth',
        'phone',
        'email',
        'date_of_address',
        'especiality_id',];


     // 1 profesor->una espescialidad
     public function especiality()
     {
         return $this->belongsTo('App\Especiality');
     }
}
