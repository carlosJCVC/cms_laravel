<?php
use App\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
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
            'name'=>'rojo',
            'stock_color'=>'741',
            'product_id'=>'2'
           ],
           [
            'name'=>'blanco',
            'stock_color'=>'32',
            'product_id'=>'2'
           ],
       ];
       foreach ($items as $key => $value) {
        Color::create($value);
        }
    }
}
