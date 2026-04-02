<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Test1 User',
            'email' => 'test1@example.com',
            'password' => hash('sha256', 123345)
        ]);
        User::create([
            'name' => 'Test2 User',
            'email' => 'test2@example.com',
            'password' => hash('sha256', 123345)
        ]);
        User::create([
            'name' => 'Test3 User',
            'email' => 'test3@example.com',
            'password' => hash('sha256', 123345)
        ]);
    }
}
