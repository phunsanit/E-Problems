<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTime = Carbon::now();

        //add teams and team owners
        DB::table('teams')->insert([
            [
                'id' => 1,
                'user_id' => 2,
                'name' => 'TIER 1 SUPPORT (L1)',
                'personal_team' => 1,
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 2,
                'user_id' => 3,
                'name' => 'TIER 2 SUPPORT (L2)',
                'personal_team' => 1,
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 3,
                'user_id' => 4,
                'name' => 'TIER 3 SUPPORT (L3)',
                'personal_team' => 1,
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 4,
                'user_id' => 5,
                'name' => 'TIER 4 SUPPORT (L4)',
                'personal_team' => 1,
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
        ]);
    }
}