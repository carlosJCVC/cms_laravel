<?php

use Illuminate\Database\Seeder;
use App\Models\Colors;
class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $colors = [
            [
                'name' => 'verde',
            ],
             $colors = 
            [
                'name' => 'rojo',
            ],
        
        
        ];

        foreach ($colors as $key => $value) {
            Colors::create($value);
        }
    }
}
