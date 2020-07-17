<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Color extends Model
{
    protected $filliable = ['name','stock_color','product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
