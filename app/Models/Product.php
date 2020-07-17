<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Color;
use App\Models\Category;

class Product extends Model
{
    protected $filliable = ['code','name','price_venta','status','stock','image','user_id','category_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function colors()
    {
        return $this->hasMany(Color::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}


