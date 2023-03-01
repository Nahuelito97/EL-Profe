<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Pais extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
    ];



    public function my_store($request)
    {

        self::create([
            'name' => $request->name,
        ]);
    }
}
