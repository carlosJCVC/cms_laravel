<?php

use Illuminate\Database\Seeder;
use App\Models\Color;
class ColorSeeder extends Seeder
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
                'name' => 'Rojo',
                'stock' =>100,
                'product_id' =>1
                
            ],
            [
                'name' => 'Azul',
                'stock' =>120,
                'product_id' =>1
            ]
        ];

        foreach ($items as $key => $value) {
            Color::create($value);
        }
    }
}
