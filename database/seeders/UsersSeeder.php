<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'username'=> 'admin',
                'email'=> 'admin@gmail.com',
                'role' => 'admin',
                'password'=> bcrypt('1234567')
            ],
            [
                'username'=> 'patcakep',
                'email'=> 'pat@gmail.com',
                'role' => 'user',
                'password'=> bcrypt('patcakep')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
