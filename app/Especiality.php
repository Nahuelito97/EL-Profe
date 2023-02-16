<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Especiality extends Model
{
    protected $fillable = [
        'id', 'name', 'description',
    ];

    public function my_store($request)
    {

        self::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
    }


}
