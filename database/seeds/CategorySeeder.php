<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
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
                'code' => 'CA001',
                'name' => 'Calzados',
                
            ],
            [
                'code' => 'CA002',
                'name' => 'Deportivos',
            ]
        ];

        foreach ($items as $key => $value) {
            Category::create($value);
        }
    }
}
