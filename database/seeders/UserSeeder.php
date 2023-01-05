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
        user::create([
            'name'=> 'joao',
            'email'=>'joaovictorsr26@gmail.com',
            'password'=>'12345678'
        ]);
    }
}
