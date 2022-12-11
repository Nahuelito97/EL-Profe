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
        'especiality_id',
        'pais_id',
        'provincy_id',
        'locality_id',
        'direction_id',
        ];


     // 1 profesor->una espescialidad
     public function especiality()
     {
         return $this->belongsTo('App\Especiality');
     }
     public function country()
     {
         return $this->belongsTo('App\Pais');
     }
     public function province()
     {
         return $this->belongsTo('App\Provincies');
     }
     public function locality()
     {
         return $this->belongsTo('App\Localidad');
     }
     public function direction()
     {
         return $this->belongsToMany('App\Direction');
     }

}
