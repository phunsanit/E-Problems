<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceLinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $currentTime = Carbon::now();

        DB::table('service_lines')->insert([
            [
              'id' => 1,
              'enable' => 1,
              'organization_id' => 0,
              'title' => 'Asia-Europe Express',
              'descriptions' => 'It would connect major ports in East Asia (e.g., Shanghai, Ningbo, Yantian) with key hubs in Europe (e.g., Rotterdam, Hamburg, Antwerp).',
              'created_at' => $currentTime,
              'updated_at' => null
            ],
            [
              'id' => 2,
              'enable' => 1,
              'organization_id' => 0,
              'title' => 'Silk Route Service',
              'descriptions' => 'It would likely connect major ports in East Asia (e.g., Shanghai, Ningbo, Hong Kong) with key hubs in the Mediterranean region and Europe (e.g., Piraeus, Istanbul, Venice, Genoa). It might also include ports in Southeast Asia and the Indian Subcontinent, reflecting the historical Silk Road.',
              'created_at' => $currentTime,
              'updated_at' => null
            ]
          ]);
    }
}
