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
        // call other seeders
        $this->call([
            // add user first
            UsersSeeder::class,

            // add other tables
            CategoriesSeeder::class,
            OrganizationsSeeder::class,
            ServiceLinesSeeder::class,
            ServiceLinesVesselsSeeder::class,
            SupportEngineerSeeder::class,
            VesselsSeeder::class,

            //add at last
            TicketsSeeder::class,
        ]);

        // User::factory(10)->create();

        /* used UsersSeeder.php
    User::factory()->create([
    'name' => 'Test User',
    'email' => 'test@example.com',
    ]);
     */
    }
}
