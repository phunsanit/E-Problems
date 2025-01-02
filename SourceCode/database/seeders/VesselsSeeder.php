<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VesselsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTime = Carbon::now();

        DB::table('vessels')->insert([
            [
                'id' => 1,
                'organization_id' => 1,
                'enable' => 1,
                'title' => 'MSC Irina Class',
                'created_at' => $currentTime,
                'updated_at' => null
            ],
            [
                'id' => 2,
                'organization_id' => 2,
                'enable' => 1,
                'title' => 'OOCL G Class (2023)',
                'created_at' => $currentTime,
                'updated_at' => null
            ],
            [
                'id' => 3,
                'organization_id' => 3,
                'enable' => 1,
                'title' => 'ONE I Class',
                'created_at' => $currentTime,
                'updated_at' => null
            ],
            [
                'id' => 4,
                'organization_id' => 4,
                'enable' => 1,
                'title' => 'MSC Tessa Class',
                'created_at' => $currentTime,
                'updated_at' => null
            ],
            [
                'id' => 5,
                'organization_id' => 5,
                'enable' => 1,
                'title' => 'Evergreen A Class (2022)',
                'created_at' => $currentTime,
                'updated_at' => null
            ],
            [
                'id' => 6,
                'organization_id' => 6,
                'enable' => 1,
                'title' => 'Evergreen A Class (2021)',
                'created_at' => $currentTime,
                'updated_at' => null
            ],
            [
                'id' => 7,
                'organization_id' => 7,
                'enable' => 1,
                'title' => 'HMM Algeciras Class (Daewoo)',
                'created_at' => $currentTime,
                'updated_at' => null
            ],
            [
                'id' => 8,
                'organization_id' => 8,
                'enable' => 1,
                'title' => 'HMM Algeciras Class (SHI)',
                'created_at' => $currentTime,
                'updated_at' => null
            ],
            [
                'id' => 9,
                'organization_id' => 9,
                'enable' => 1,
                'title' => 'MSC Gülsün Class',
                'created_at' => $currentTime,
                'updated_at' => null
            ],
            [
                'id' => 10,
                'organization_id' => 10,
                'enable' => 1,
                'title' => 'Hapag Lloyd Berlin Express Class (2023)',
                'created_at' => $currentTime,
                'updated_at' => null
            ],
        ]);
    }
}
