<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

     //RELACION DE UNO A MUCHOS
     public function courses()
     {
         return $this->hasMany(Course::class);
     }

}
