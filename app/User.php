<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class User extends Authenticatable
{
    use HasFactory;
    use HasRoles;
    use Notifiable;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'surname',
        'dni',
        'date_of_birth',
        'phone',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //// RELATIONS UNO A UNO////
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }


    //RELACION UNO A MUCHOS//
    public function courses_dictated()
    {
        return $this->hasMany(Course::class);
    }


    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function reactions()
    {
        return $this->hasMany(Reaction::class);
    }

    //RELACION MUCHOS A MUCHOS//
    public function courses_enrolled(){
        return $this->belongsToMany(Course::class);
    }

    public function lessons(){
        return $this->belongsToMany(Lesson::class);
    }



}
