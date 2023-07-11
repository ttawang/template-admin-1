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
        // $val = string('developer');
        User::create([
            'name' => 'developer',
            'username' => 'developer',
            'email' => 'developer@gmail.com',
            'password' => 'developer',
            'role' => 'developer'
        ]);
    }
}
