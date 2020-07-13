<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\User;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Carlos',
            'email' => 'carlos@carlos.com',
            'password' => bcrypt('carlos')
        ]);

        $items = [
            [
                'name' => 'Product 1',
                'user_id' => $user->id,
                'price' => 15.4,
                'color' => 'Rojo',
                'category' => 'Calzados',
            ],
            [
                'name' => 'Product 2',
                'user_id' => $user->id,
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
