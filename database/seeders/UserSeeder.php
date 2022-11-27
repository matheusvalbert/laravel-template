<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'secretaria',
            'email' => 'secretaria'.'@gmail.com',
            'password' => Hash::make('morteaolaravel'),
            'permissions' => 3,
        ]);
    }
}
