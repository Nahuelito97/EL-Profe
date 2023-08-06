<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    //RELACION UNO A UNO INVERSA
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
