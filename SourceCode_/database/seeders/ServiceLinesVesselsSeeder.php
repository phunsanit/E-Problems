<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceLinesVesselsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('service_lines_vessels')->insert([
            ['service_line_id' => 1, 'vessel_id' => 1],
            ['service_line_id' => 1, 'vessel_id' => 2],
            ['service_line_id' => 1, 'vessel_id' => 3],
            ['service_line_id' => 1, 'vessel_id' => 4],
            ['service_line_id' => 1, 'vessel_id' => 7],
            ['service_line_id' => 1, 'vessel_id' => 8],
            ['service_line_id' => 2, 'vessel_id' => 1],
            ['service_line_id' => 2, 'vessel_id' => 4],
            ['service_line_id' => 2, 'vessel_id' => 5],
            ['service_line_id' => 2, 'vessel_id' => 6],
            ['service_line_id' => 2, 'vessel_id' => 9],
            ['service_line_id' => 2, 'vessel_id' => 10],
        ]);
    }
}
