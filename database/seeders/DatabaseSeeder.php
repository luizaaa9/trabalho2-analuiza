<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        /*User::create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('12345678'),
            'is_admin' => true
        ]);*/
        $this->call(UserSeeder::class);

    }
    
}
