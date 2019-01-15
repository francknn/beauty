<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisations extends Model
{
    protected $fillable = [

        'nom',
        'pays',
        'ville',
        'user_id',
       
    ];
}
