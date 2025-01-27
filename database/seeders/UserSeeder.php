<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'admin',
                'password' => Hash::make('admin@123'),
                'email' => 'admin@invsys.com',
                'role' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
                'last_login' => now(),
            ],
        ]);
    }
}
