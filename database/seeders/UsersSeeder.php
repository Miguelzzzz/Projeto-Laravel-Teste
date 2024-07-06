<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstName' => 'Miguel',
            'lastName' => 'Marcondes',
            'email' => 'miguelmarcondes@gmail.com',
            'password' => bcrypt('12345'),
        ]);
    }
}
