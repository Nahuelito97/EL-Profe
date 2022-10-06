<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = [
        'id',
        'name',
        'surname',
        'dni',
        'date_of_birth',
        'phone',
        'email',
        'date_of_address',
        'borrado'];
}
