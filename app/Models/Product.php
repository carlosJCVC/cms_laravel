<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       "name","codigo","price_compra","price_venta","status","stock","image"
    ];

    protected $hidden =[
        'created_at','updated_at'
    ];
    /*un producto pertenece a un usuario*/ 
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    /*un producto tiene muchos colores */
    public function color()
    {
        return $this->hasMany('App\Models\Color');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    
}
