<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
                'title' => 'Web Site blocker',
                'description' => 'add new web site blocker',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'enable' => 1,
                'title' => 'Allow access to websites',
                'description' => 'Allow access to websites',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'enable' => 1,
                'title' => 'install program',
                'description' => 'allow install program',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'enable' => 1,
                'title' => 'blocking program',
                'description' => 'blocking program, disallow install program, remove program',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
