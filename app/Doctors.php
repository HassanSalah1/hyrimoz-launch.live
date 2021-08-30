<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    //
    protected $fillable = [
        'name',
        'email',
        'phone',
        'scfhs',
        'specialty',
        'hospital',
        'channel',
        'question',
        'attend',
        ];
}
