<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Students extends Model
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
        'status',
        'pais_id',
        'provincies_id',
        'localities_id',
        'directions_id',
        'status'

    ];

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
