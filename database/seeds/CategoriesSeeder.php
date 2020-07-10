<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           $categories = [
            [
                'name' => 'calzados',
                'codigo' => 123,
            ],

            $categories = 
            [
                'name' => 'bestidos',
                'codigo' => 12345,
            ],

            $categories = 
            [
                'name' => 'jose',
                'codigo' => 123456,
            ],
            
        ];

        foreach ($categories as $key => $value) {
            Category::create($value);
        }
    }
}
