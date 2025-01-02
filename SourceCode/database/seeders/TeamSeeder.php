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
                'name' => 'Tier 1 support (L1)',
                'personal_team' => 1,
                'created_at' => $currentTime,
                'updated_at' => null
            ],
            [
                'id' => 2,
                'user_id' => 3,
                'name' => 'Tier 2 support (L2)',
                'personal_team' => 1,
                'created_at' => $currentTime,
                'updated_at' => null
            ],
            [
                'id' => 3,
                'user_id' => 4,
                'name' => 'Tier 3 support (L3)',
                'personal_team' => 1,
                'created_at' => $currentTime,
                'updated_at' => null
            ],
            [
                'id' => 4,
                'user_id' => 5,
                'name' => 'Tier 4 support (L4)',
                'personal_team' => 1,
                'created_at' => $currentTime,
                'updated_at' => null
            ],
        ]);
    }
}