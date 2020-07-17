<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
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
                'first_name' => 'Pedro',
                'last_name' => 'Gonzales Claros',
                'ci' =>'12345cbba',
                'phone' =>'+591 65740670',
                'status' =>'ACTIVO',
                'email' => 'pedro@pedro.com',
                'password' => bcrypt('pedro')
            ],           
            [
                'first_name' => 'Juan',
                'last_name' => 'Viamont Perez',
                'ci' =>'52341cbba',
                'phone' =>'+591 70778765',
                'status' =>'INACTIVO',
                'email' => 'juan@juan.com',
                'password' => bcrypt('juan')
            ]
        ];

        foreach ($items as $key => $value) {
            User::create($value);
        }
    }
}
