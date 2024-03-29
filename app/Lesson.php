<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    //RELACION DE UNO A UNO
    public function description()
    {
        return $this->hasOne(Description::class);
    }

    //RELACION UNO A MUCHOS INVERSA//
    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    //RELACION MUCHOS A MUCHOS
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    //RELACION UNO A UNO POLIMORFICA//
    public function resource()
    {
        return $this->morphOne(Resource::class, 'resourceable');
    }


    //RELACION UNO A MUCHOS POLIMORFICA//
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function reactions()
    {
        return $this->morphMany(Reaction::class, 'reactionable');
    }

}
