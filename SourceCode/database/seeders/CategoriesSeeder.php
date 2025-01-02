<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTime = Carbon::now();

        DB::table('categories')->insert([
            [
                'id' => 1,
                'enable' => 1,
                'priority_id' => 1,
                'title' => 'Web Site blocker',
                'description' => 'add new web site blocker',
                'created_at' => $currentTime,
                'updated_at' => null
            ],
            [
                'id' => 2,
                'enable' => 1,
                'priority_id' => 2,
                'title' => 'Allow access to websites',
                'description' => 'Allow access to websites',
                'created_at' => $currentTime,
                'updated_at' => null
            ],
            [
                'id' => 3,
                'enable' => 1,
                'priority_id' => 3,
                'title' => 'install program',
                'description' => 'allow install program',
                'created_at' => $currentTime,
                'updated_at' => null
            ],
            [
                'id' => 4,
                'enable' => 1,
                'priority_id' => 4,
                'title' => 'blocking program',
                'description' => 'blocking program, disallow install program, remove program',
                'created_at' => $currentTime,
                'updated_at' => null
            ],
        ]);
    }
}
