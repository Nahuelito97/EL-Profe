<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    //RELACION UNO A MUCHOS//

    public function lessons(){
        return $this->hasMany(Lesson::class);
    }
}
