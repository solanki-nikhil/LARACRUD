<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Ram',
            'email'=>'Ram@gmail.com',
            'contact'=>'0123456789',
            'age'=>'500',
            'city'=>'Ayodhya'
        ]);
    }
}
