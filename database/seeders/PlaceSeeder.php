<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('places')->insert([
            ['name' => 'Place 1', 'description' => Str::random(10), 'latitude' => 11.1231, 'longitude' => 44.1231, 'category_id' => 1],
            ['name' => 'Place 2', 'description' => Str::random(10), 'latitude' => 22.1231, 'longitude' => 55.1231, 'category_id' => 2],
            ['name' => 'Place 3', 'description' => Str::random(10), 'latitude' => 33.1231, 'longitude' => 66.1231, 'category_id' => 3],
        ]);
    }
}
