<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'fullname' => Str::random(20),
            'email' => Str::random(10) . '@example.com',
            'password' => Hash::make('password'),
            'is_admin' => 'true',
            'login' => Str::random(10),
            'photo' => null,
        ]);
        DB::table('users')->insert([
            'fullname' => Str::random(20),
            'email' => Str::random(10) . '@example.com',
            'password' => Hash::make('password'),
            'is_admin' => 'false',
            'login' => Str::random(10),
            'photo' => null,
        ]);
    }
}
