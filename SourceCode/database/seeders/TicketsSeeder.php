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
                'id' => 3,
                'status_id' => 1,
                'category_id' => 1,
                'vessel_id' => 10,
                'service_lines_id' => 1,
                'support_engineer_id' => 3,
                'opened_dt' => '2024-12-12 07:13:30',
                'colsed_dt' => '2024-12-12 07:13:30',
                'sla_dt' => '2024-12-12 07:13:30',
                'descriptions' => 'please upgrade internet speed\r\nplease upgrade internet speed\r\nplease upgrade internet speed\r\nplease upgrade internet speed\r\nplease upgrade internet speed\r\nplease upgrade internet speed\r\nplease upgrade internet speed',
                'created_at' => '2024-12-12 07:16:40',
                'updated_at' => '2024-12-12 07:16:40',
                'created_by' => 1,
                'updated_by' => 2,
                'deleted_by' => 1,
            ],
            [
                'id' => 4,
                'status_id' => 2,
                'category_id' => 2,
                'vessel_id' => 8,
                'service_lines_id' => 2,
                'support_engineer_id' => 4,
                'opened_dt' => '2024-12-12 07:13:30',
                'colsed_dt' => '2024-12-12 07:13:30',
                'sla_dt' => '2024-12-12 07:13:30',
                'descriptions' => 'SSL failed please fixed',
                'created_at' => '2024-12-12 07:16:40',
                'updated_at' => '2024-12-12 07:16:40',
                'created_by' => 1,
                'updated_by' => 3,
                'deleted_by' => 2,
            ],
        ]);
    }
}
