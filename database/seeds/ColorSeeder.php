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
                'price' => 10.0,
                'status' =>"ACTIVO",
                'stock' =>100
                
            ],
            [
                'name' => 'Azul',
                'price' => 15.0,
                'status' =>"INACTIVO",
                'stock' =>120
            ]
        ];

        foreach ($items as $key => $value) {
            Color::create($value);
        }
    }
}
