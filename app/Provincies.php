<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provincies extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'pais_id'
    ];

    public function pais()
    {
        return $this->belongsTo('App\Pais');
    }



    public function my_store($request)
    {
        self::create([
            'name' => $request->name,
            'pais_id' => $request->pais_id,
        ]);
    }
}
