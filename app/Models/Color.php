<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Color extends Model
{
    protected $filliable = ['name','stock_color','product_id'];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
