<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;




class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('123456'),
            'is_admin' => 1
        ]);
    
        User::create([
            'name' => 'Usuário',
            'email' => 'user@email.com',
            'password' => Hash::make('123456'),
            'is_admin' => 0
        ]);
    }
    
}
