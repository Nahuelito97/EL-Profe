<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    //RELACION UNO A MUCHOS INVERSA//
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
