<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * TODO
 * nombre incorrecto de modelo
 */
class Colors extends Model
{
    //

    protected $fillable = [
        "name"
    ];

    protected $hidden =[
        'created_at','updated_at'
    ];
}
