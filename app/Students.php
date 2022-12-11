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
        'date_of_address',
        'pais_id',
        'provincies_id',
        'localidad_id',
        'direction_id',
    ];



public function my_store($request)
{

    self::create([
        'name' => $request->name,
        'surname' => $request->surname,
        'dni' => $request->dni,
        'date_of_birth' => $request->date_of_birth,
        'phone' => $request->phone,
        'email' => $request->email,
        'date_of_address' => $request->date_of_address,
    ]);
}

}
