<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTime = Carbon::now();

        DB::table('tickets')->insert([
            [
                'id' => 1,
                'status_id' => 1,
                'category_id' => 1,
                'vessel_id' => 1,
                'service_line_id' => 1,
                'support_engineer_id' => 2,
                'sla_dt' => '2024-12-12 06:00:01',
                'descriptions' => 'descriptions about issue',
                'created_at' => $currentTime,
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
                'service_line_id' => 2,
                'support_engineer_id' => 3,
                'sla_dt' => '2024-12-14 09:00:02',
                'descriptions' => 'detail',
                'created_at' => $currentTime,
                'updated_at' => null,
                'created_by' => 1,
                'updated_by' => null,
                'deleted_by' => null,
            ],
            [
                'id' => 3,
                'status_id' => 2,
                'category_id' => 2,
                'vessel_id' => 2,
                'service_line_id' => 2,
                'support_engineer_id' => 4,
                'sla_dt' => '2024-12-21 12:00:03',
                'descriptions' => 'detail',
                'created_at' => $currentTime,
                'updated_at' => null,
                'created_by' => 1,
                'updated_by' => null,
                'deleted_by' => null,
            ],
            [
                'id' => 4,
                'status_id' => 2,
                'category_id' => 2,
                'vessel_id' => 2,
                'service_line_id' => 2,
                'support_engineer_id' => 5,
                'sla_dt' => '2024-12-21 00:00:04',
                'descriptions' => 'detail',
                'created_at' => $currentTime,
                'updated_at' => null,
                'created_by' => 1,
                'updated_by' => null,
                'deleted_by' => null,
            ],
            [
                'id' => 5,
                'status_id' => 2,
                'category_id' => 2,
                'vessel_id' => 2,
                'service_line_id' => 2,
                'support_engineer_id' => 2,
                'sla_dt' => '2024-12-28 13:00:05',
                'descriptions' => 'detail',
                'created_at' => $currentTime,
                'updated_at' => null,
                'created_by' => 1,
                'updated_by' => null,
                'deleted_by' => null,
            ],
            [
                'id' => 6,
                'status_id' => 1,
                'category_id' => 1,
                'vessel_id' => 1,
                'service_line_id' => 1,
                'support_engineer_id' => 1,
                'sla_dt' => '2024-12-07 00:00:06',
                'descriptions' => 'detail',
                'created_at' => $currentTime,
                'updated_at' => null,
                'created_by' => 1,
                'updated_by' => null,
                'deleted_by' => null,
            ]
        ]);
    }
}
