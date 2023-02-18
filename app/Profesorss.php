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
        'email',
        'especialitis_id',
        'genero_id',
        'telefono_id',
        'pais_id',
        'provincies_id',
        'localities_id',
        'directions_id',
        ];


        public function genero(){
            return $this->belongsTo('App\Genero');
        }

        public function telefono()
        {
            return $this->belongsTo('App\Telefono');
        }

        // 1 profesor->una espescialidad
        public function especialitis()
        {
            return $this->belongsTo('App\Especiality');
        }
        public function pais()
        {
            return $this->belongsTo('App\Pais');
        }
        public function provincies()
        {
            return $this->belongsTo('App\Provincies');
        }
        public function localities()
        {
            return $this->belongsTo('App\Localidad');
        }
        public function directions()
        {
            return $this->belongsTo('App\Direction');
        }

}
