<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria_1 = Category::find(1);
        $categoria_2 = Category::find(2);
        
        $user_1 = Category::find(1);
     

        $items = [
            [
                'code' => '2020001',
                'name' => 'Product 1',
                'price_compra' => 14.4,
                'price_venta' => 15.0,
                'status' =>'disponible',
                'stock' => 100,
                'image'=>'image 1',
                'category_id' => $categoria_1->id,
                'user_id' =>$user_1->id
            ],
            [
                'code' => '2020002',
                'name' => 'Product 2',
                'price_compra' => 4.4,
                'price_venta' => 5.0,
                'status' =>'disponible',
                'stock' => 20,
                'image'=>'image 2',
                'category_id' => $categoria_2->id,
                'user_id' =>$user_1->id
            ]
        ];

        foreach ($items as $key => $value) {
            Product::create($value);
        }
    }
}
