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
        //

         $users = [
            [
                'ci' => 11111,
                'first_name' => 'jose',
                'last_name' => 'flores',
                'email' => 'jose@gmail.com',
                'phone' => 123,
                'password' => bcrypt('123456789'),
                // 'status' => 'password',
            ],
            [
                'ci' => 2222,
                'first_name' => 'franz',
                'last_name' => 'ortega',
                'email' => 'franz@gmail.com',
                'phone' => 12345,
                'password' => bcrypt('123456789'),
                // 'status' => 'password',
            ],
             [
                'ci' => 3333,
                'first_name' => 'fatima',
                'last_name' => 'lozano',
                'email' => 'fatima@gmail.com',
                'phone' => 1234567,
                'password' => bcrypt('123456789'),
                // 'status' => 'password',
            ],
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
