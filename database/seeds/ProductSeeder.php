<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items =[
            [
                'code'=>'qwerty',
                'name'=>'mabel',
                'price_venta'=>'12',
                'status'=>'1',
                'stock'=>'89',
                'image'=>'imagen1',
                'user_id'=>'1',
                'category_id'=>'2'
            ],
            [
                'code'=>'dsfa',
                'name'=>'fanta',
                'price_venta'=>'10',
                'status'=>'0',
                'stock'=>'45',
                'image'=>'imagen2',
                'user_id'=>'1',
                'category_id'=>'1'
            ],
        ];
        foreach ($items as $key => $value) {
            Product::create($value);
        }
    }
}
