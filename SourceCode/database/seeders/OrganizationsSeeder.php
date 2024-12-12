<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
        DB::table('organizations')->insert([
            ['id' => 1, 'enable' => 1, 'title' => 'FedEx', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 2, 'enable' => 1, 'title' => 'DHL', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 3, 'enable' => 1, 'title' => 'UPS', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 4, 'enable' => 1, 'title' => 'Blue Dart', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 5, 'enable' => 1, 'title' => 'PostNL', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 6, 'enable' => 1, 'title' => 'DB Schenker', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 7, 'enable' => 1, 'title' => 'R + L Carriers', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 8, 'enable' => 1, 'title' => 'DTDC', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 9, 'enable' => 1, 'title' => 'TNT', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 10, 'enable' => 1, 'title' => 'YRC Freight', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 11, 'enable' => 1, 'title' => 'Royal Mail', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 12, 'enable' => 1, 'title' => 'Asendia', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 13, 'enable' => 1, 'title' => 'Flat Export', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 14, 'enable' => 1, 'title' => 'Passport', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
