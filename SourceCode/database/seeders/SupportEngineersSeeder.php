<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
            ['user_id' => 2, 'enable' => true, 'level' => 1, 'created_at' => $currentTime, 'updated_at' => null],
            ['user_id' => 3, 'enable' => true, 'level' => 2, 'created_at' => $currentTime, 'updated_at' => null],
            ['user_id' => 4, 'enable' => true, 'level' => 3, 'created_at' => $currentTime, 'updated_at' => null],
            ['user_id' => 5, 'enable' => true, 'level' => 4, 'created_at' => $currentTime, 'updated_at' => null],
        ]);
    }
}
