<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* for ($i = 1; $i <= 10000; $i++) {
            $username = 'user' . $i;
            $email = 'user' . $i . '@example.com';

            User::create([
                'name' => $username,
                'username' => $username,
                'email' => $email,
                'password' => 'password'
            ]);
        } */

        User::create([
            'name' => 'developer',
            'username' => 'developer',
            'email' => 'developer@gmail.com',
            'password' => 'developer',
            'role' => 'developer'
        ]);
    }
}
