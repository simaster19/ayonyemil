<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Miftakhul Kirom',
            'email' => 'miftakhulkirom@gmail.com',
            'username' => 'simaster19',
            'alamat' => 'Kaliwungu',
            'no_hp' => '089635032061',
            'role' => 'admin',
            'password' => Hash::make('simaster123')
        ]);

        \App\Models\Product::factory(1500)->create();
    }
}
