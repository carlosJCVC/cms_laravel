<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'name' => 'Product 1',
                'codigo' => 1111,
                'price_compra' => 15.4,
                'price_venta' => 19.4,
                'stock' => 'Calzados',
                'image' => 'Calzados',
            ],
             [
                'name' => 'Product 2',
                'codigo' => 22222,
                'price_compra' => 15.4,
                'price_venta' => 20.4,
                'stock' => 'Calzados',
                'image' => 'Calzados',
            ],
        ];

        foreach ($items as $key => $value) {
            Product::create($value);
        }
    }
}
