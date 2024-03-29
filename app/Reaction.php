<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    const LIKE = 1;
    const DISLIKE = 2;


    //RELACION UNO A MUCHOS INVERSA//
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function reactionable()
    {
        return $this->morphTo();
    }
}
