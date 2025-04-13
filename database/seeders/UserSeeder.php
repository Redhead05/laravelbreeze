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
            'nia' => '13410100207',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'admin'
        ]);

        User::create([
            'nia' => '13410100208',
            'name' => 'asesor',
            'email' => 'asesor@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'asesor'
        ]);

        User::create([
            'nia' => '13410100209',
            'name' => 'persuratan',
            'email' => 'persuratan@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'persuratan'
        ]);
        User::create([
            'nia' => '13410100210',
            'name' => 'keuangan',
            'email' => 'keuangan@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'keuangan'
        ]);
        User::create([
            'nia' => '13410100210',
            'name' => 'pppk',
            'email' => 'pppk@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'pppk'
        ]);
    }
}
