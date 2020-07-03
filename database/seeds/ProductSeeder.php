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
                'price' => 15.4,
                'color' => 'Rojo',
                'category' => 'Calzados',
            ],
            [
                'name' => 'Product 2',
                'price' => 15.4,
                'color' => 'Negro',
                'category' => 'Calzados',
            ]
        ];

        foreach ($items as $key => $value) {
            Product::create($value);
        }
    }
}
