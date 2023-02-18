<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $fillable = [
        'name', 'cod_post', 'provincies_id',
    ];

    public function provincies()
    {
        return $this->belongsTo('App\Provincies');
    }


    public function my_store($request)
    {
        self::create([
            'name' => $request->name,
            'cod_post' => $request->cod_post,
            'provincies_id' => $request->provincies_id,
        ]);
    }
}
