<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Color;
use App\Category;
class Product extends Model
{
    protected $filliable = ['code','name','price_venta','status','stock','image','user_id','category_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function color(){
        return $this->hasMany(Color::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}


