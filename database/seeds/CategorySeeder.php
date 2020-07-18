<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items=[
            [
                'code'=>'ujl',
                'name'=>'bebida'
            ],
            [
                'code'=>'dssd',
                'name'=>'comestible'
            ]
        ];
        foreach ($items as $key => $value) {
            Category::create($value);
        }
    }
}
