<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupportEngineerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('support_engineer')->insert([
            [
                'user_id' => 2,
                'level' => 1,
                'created_at' => Carbon::create('2024', '12', '12', '06', '16', '36'),
                'updated_at' => Carbon::create('2024', '12', '12', '06', '16', '36'),
            ],
            [
                'user_id' => 3,
                'level' => 2,
                'created_at' => Carbon::create('2024', '12', '12', '06', '16', '36'),
                'updated_at' => Carbon::create('2024', '12', '12', '06', '16', '36'),
            ],
            [
                'user_id' => 4,
                'level' => 3,
                'created_at' => Carbon::create('2024', '12', '12', '06', '16', '36'),
                'updated_at' => Carbon::create('2024', '12', '12', '06', '16', '36'),
            ],
            [
                'user_id' => 5,
                'level' => 4,
                'created_at' => Carbon::create('2024', '12', '12', '06', '16', '36'),
                'updated_at' => Carbon::create('2024', '12', '12', '06', '16', '36'),
            ],
        ]);
    }
}
