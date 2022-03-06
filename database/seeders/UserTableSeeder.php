<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[
            ['id'=>1,
            'name'=>'admin',
            'email'=>'admin@gmail.com','phone_number'=>12345678900,
            'user_type'=>2,
            'password'=>bcrypt(12345678),
        ],
        ];
        User::insert($users);
    }
}
