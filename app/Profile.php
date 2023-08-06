<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    //// RELATIONS UNO A UNO INVERSA ////
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
