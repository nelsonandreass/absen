<?php

use Illuminate\Database\Seeder;

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
            'name' => "Nelson",
            'email' => 'nelson@gmail.com',
            'password' => Hash::make('password'),
            'kartu' => '1234567',
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => "admin"
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('password'),
            'role' => "superadmin"
        ]);
    }
}
