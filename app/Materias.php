<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Materias extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'id', 
        'name', 
        'description', 
        'profesor_id',
    ];


    public function my_store($request)
    {

        self::create([
            'name' => $request->name,
            'description' => $request->description,
            'profesor_id' => $request->profesor_id,
        ]);
    }


    // 1 materia->un profesor
    public function profesor()
    {
        return $this->belongsTo('App\Profesorss');
    }
}
