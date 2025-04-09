<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'asesor',
            'email' => 'asesor@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'asesor'
        ]);

        User::create([
            'name' => 'persuratan',
            'email' => 'persuratan@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'persuratan'
        ]);
        User::create([
            'name' => 'keuangan',
            'email' => 'keuangan@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'keuangan'
        ]);
        User::create([
            'name' => 'pppk',
            'email' => 'pppk@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'pppk'
        ]);
    }
}
