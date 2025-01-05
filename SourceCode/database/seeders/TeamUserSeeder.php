<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TeamUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTime = Carbon::now();

        \DB::table('team_user')->insert([
            ['id' => 1, 'team_id' => 1, 'user_id' => 2, 'role' => null, 'created_at' => $currentTime, 'updated_at' => null],
            ['id' => 2, 'team_id' => 2, 'user_id' => 3, 'role' => null, 'created_at' => $currentTime, 'updated_at' => null],
            ['id' => 3, 'team_id' => 3, 'user_id' => 4, 'role' => null, 'created_at' => $currentTime, 'updated_at' => null],
            ['id' => 4, 'team_id' => 4, 'user_id' => 5, 'role' => null, 'created_at' => $currentTime, 'updated_at' => null],
        ]);
    }
}
