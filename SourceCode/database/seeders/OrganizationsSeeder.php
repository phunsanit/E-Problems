<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * php artisan db:seed --class=OrganizationsSeeder
         */

        /**
         * if you want to to test auto increment
         *
        DB::table('organizations')->insert([
        [ 'enable' => true, 'title' => 'FedEx', 'created_at' => now(), 'updated_at' => now()],
        [ 'enable' => true, 'title' => 'DHL', 'created_at' => now(), 'updated_at' => now()],
        [ 'enable' => true, 'title' => 'UPS', 'created_at' => now(), 'updated_at' => now()],
        [ 'enable' => true, 'title' => 'Blue Dart', 'created_at' => now(), 'updated_at' => now()],
        [ 'enable' => true, 'title' => 'PostNL', 'created_at' => now(), 'updated_at' => now()],
        [ 'enable' => true, 'title' => 'DB Schenker', 'created_at' => now(), 'updated_at' => now()],
        [ 'enable' => true, 'title' => 'R + L Carriers', 'created_at' => now(), 'updated_at' => now()],
        [ 'enable' => true, 'title' => 'DTDC', 'created_at' => now(), 'updated_at' => now()],
        [ 'enable' => true, 'title' => 'TNT', 'created_at' => now(), 'updated_at' => now()],
        [ 'enable' => true, 'title' => 'YRC Freight', 'created_at' => now(), 'updated_at' => now()],
        [ 'enable' => true, 'title' => 'Royal Mail', 'created_at' => now(), 'updated_at' => now()],
        [ 'enable' => true, 'title' => 'Asendia', 'created_at' => now(), 'updated_at' => now()],
        [ 'enable' => true, 'title' => 'Flat Export', 'created_at' => now(), 'updated_at' => now()],
        [ 'enable' => true, 'title' => 'Passport', 'created_at' => now(), 'updated_at' => now()],
        ]);
         */

        DB::table('organizations')->insert([
            ['id' => 1, 'enable' => true, 'title' => 'FedEx', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'enable' => true, 'title' => 'DHL', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'enable' => true, 'title' => 'UPS', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'enable' => true, 'title' => 'Blue Dart', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'enable' => true, 'title' => 'PostNL', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'enable' => true, 'title' => 'DB Schenker', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'enable' => true, 'title' => 'R + L Carriers', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'enable' => true, 'title' => 'DTDC', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'enable' => true, 'title' => 'TNT', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'enable' => true, 'title' => 'YRC Freight', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'enable' => true, 'title' => 'Royal Mail', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'enable' => true, 'title' => 'Asendia', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'enable' => true, 'title' => 'Flat Export', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'enable' => true, 'title' => 'Passport', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
