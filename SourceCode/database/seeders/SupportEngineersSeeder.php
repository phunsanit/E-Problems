<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupportEngineersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTime = Carbon::now();

    DB::table('support_engineers')->insert([
        ['user_id' => 2, 'level' => 1, 'created_at' => $currentTime, 'updated_at' => $currentTime],
        ['user_id' => 3, 'level' => 2, 'created_at' => $currentTime, 'updated_at' => $currentTime],
        ['user_id' => 4, 'level' => 3, 'created_at' => $currentTime, 'updated_at' => $currentTime],
        ['user_id' => 5, 'level' => 4, 'created_at' => $currentTime, 'updated_at' => $currentTime],
    ]);
    }
}