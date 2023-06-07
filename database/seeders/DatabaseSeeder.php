<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            SoftwareSeeder::class,
            PositionSeeder::class,
            ArtistSeeder::class,
            WorkSeeder::class,
            PageSeeder::class,
            FieldSeeder::class,
            FieldPageSeeder::class,
            FileSeeder::class,
            ArtistWorkSeeder::class,
            SoftwareWorkSeeder::class,
        ]);
    }
}
