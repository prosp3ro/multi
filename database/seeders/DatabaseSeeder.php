<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert (
            array (
                'id' => 1,
                'name' => 'App Admin',
                'email' => 'admin@multi.com',
                'password' => Hash::make('password123'),
                'email_verified_at' => Date('Y-m-d H:i:s'),
                'created_at' => Date('Y-m-d H:i:s')
            )
        );
    }
}
