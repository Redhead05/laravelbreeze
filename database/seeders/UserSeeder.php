<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'role' => 'admin',
            'status' => 'inactive',
        ]);

        User::create([
            'nia' => '13410100208',
            'name' => 'asesor',
            'email' => 'asesor@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'asesor',
            'status' => 'inactive',
        ]);

        User::create([
            'nia' => '13410100209',
            'name' => 'persuratan',
            'email' => 'persuratan@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'persuratan',
            'status' => 'inactive',
        ]);
        User::create([
            'nia' => '13410100210',
            'name' => 'keuangan',
            'email' => 'keuangan@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'keuangan',
            'status' => 'inactive',
        ]);
        User::create([
            'nia' => '13410100210',
            'name' => 'pppk',
            'email' => 'pppk@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'pppk',
            'status' => 'inactive',
        ]);

        for ($i = 1; $i <= 20; $i++) {
            User::create([
                'nia' => '13410100' . str_pad($i + 10, 3, '0', STR_PAD_LEFT),
                'name' => 'User ' . $i,
                'email' => 'user' . $i . '@example.com',
                'password' => Hash::make('password'),
                'role' => ['admin', 'asesor', 'persuratan', 'keuangan', 'pppk'][array_rand(['admin', 'asesor', 'persuratan', 'keuangan', 'pppk'])],
                'status' => ['active', 'inactive'][array_rand(['active', 'inactive'])],
            ]);
        }
    }
}
