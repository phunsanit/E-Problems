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
        DB::table('categories')->insert([
            [
                'id' => 1,
                'enable' => 1,
                'priority_id' => 1,
                'title' => 'Web Site blocker',
                'description' => 'add new web site blocker',
                'created_at' => Carbon::create('2024', '12', '12', '05', '59', '33'),
                'updated_at' => Carbon::create('2024', '12', '12', '05', '59', '33'),
            ],
            [
                'id' => 2,
                'enable' => 1,
                'priority_id' => 2,
                'title' => 'Allow access to websites',
                'description' => 'Allow access to websites',
                'created_at' => Carbon::create('2024', '12', '12', '05', '59', '34'),
                'updated_at' => Carbon::create('2024', '12', '12', '05', '59', '34'),
            ],
            [
                'id' => 3,
                'enable' => 1,
                'priority_id' => 3,
                'title' => 'install program',
                'description' => 'allow install program',
                'created_at' => Carbon::create('2024', '12', '12', '06', '00', '15'),
                'updated_at' => Carbon::create('2024', '12', '12', '06', '00', '15'),
            ],
            [
                'id' => 4,
                'enable' => 1,
                'priority_id' => 4,
                'title' => 'blocking program',
                'description' => 'blocking program, disallow install program, remove program',
                'created_at' => Carbon::create('2024', '12', '12', '05', '59', '35'),
                'updated_at' => Carbon::create('2024', '12', '12', '05', '59', '35'),
            ],
        ]);
    }
}
