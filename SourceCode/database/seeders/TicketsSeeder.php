<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert([
            [
                'id' => 1,
                'status_id' => 1,
                'category_id' => 1,
                'vessel_id' => 1,
                'service_lines_id' => 1,
                'support_engineer_id' => 2,
                'sla_dt' => '2024-12-12 08:00:01',
                'descriptions' => 'descriptions about issue',
                'created_at' => '2024-12-12 08:01:38',
                'updated_at' => null,
                'created_by' => 1,
                'updated_by' => null,
                'deleted_by' => null,
            ],
            [
                'id' => 2,
                'status_id' => 2,
                'category_id' => 2,
                'vessel_id' => 2,
                'service_lines_id' => 2,
                'support_engineer_id' => 3,
                'sla_dt' => '2024-12-12 08:00:01',
                'descriptions' => 'detail',
                'created_at' => '2024-12-12 08:01:38',
                'updated_at' => null,
                'created_by' => 1,
                'updated_by' => null,
                'deleted_by' => null,
            ],
        ]);
    }
}
