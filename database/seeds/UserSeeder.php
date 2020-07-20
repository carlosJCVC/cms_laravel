<?php

use Illuminate\Database\Seeder;
use App\Models\User;

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
                'ci' =>'345cbba',
                'namber_phone' =>'65740670',
                'status' =>'ACTIVO',
                'email' => 'pedro@pedro.com',
                'password' =>'pedro',
            ],
            [
                'first_name' => 'Juan',
                'last_name' => 'Viamont Perez',
                'ci' =>'52341cbba',
                'namber_phone' =>'70778765',
                'status' =>'INACTIVO',
                'email' => 'juan@juan.com',
                'password' =>'juan'
            ],
            [
                'first_name' => 'Edson',
                'last_name' => 'rosas',
                'ci' =>'52322cbba',
                'namber_phone' =>'70278765',
                'status' =>'INACTIVO',
                'email' => 'edson@edson.com',
                'password' =>'edson'
            ]
        ];

        foreach ($items as $key => $value) {
            User::create($value);
        }
    }
}