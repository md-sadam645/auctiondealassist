<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'full_name' => Str::random(10),
            'email' => 'admin@gmail.com',
            'password' => Hash::make('sid12345'),
            'mobile' => "1234567890",
            'address' => Str::random(10),
            'role'=>'1',
            'status'=>'1',
        ]);
//         DB::table('users')->insert([
//             'full_name' => Str::random(10),
//             'email_username' => 'hub@gmail.com',
//             'password' => Hash::make('sid123'),
//             'role'=>'2',
//             'status'=>'1',
//         ]);
//         DB::table('users')->insert([
//             'name' => Str::random(10),
//             'email_username' => 'customer@gmail.com',
//             'password' => Hash::make('sid123'),
//             'role'=>'3',
//             'status'=>'1',
//         ]);

    }
}
