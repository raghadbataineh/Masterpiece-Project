<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Anfal dhairat',
            'email' => 'anfal@example.com',
            'phone' => '0791234567',
            'address' => '123 Main St',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Raghad Doe',
            'email' => 'raghad@example.com',
            'phone' => '0790805678',
            'address' => '123 Main St',
            'password' => Hash::make('password'),
        ]);


    }
}
