<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'pitt phunsanit',
                'email' => 'phunsani@gmail.com',
                'email_verified_at' => Carbon::parse('2024-12-11 07:44:57'),
                'password' => 'f315ec52b0f080581bc2be4fb602a480',
                'remember_token' => 'zVCvkZD3I3',
                'created_at' => Carbon::parse('2024-12-11 07:44:57'),
                'updated_at' => Carbon::parse('2024-12-11 07:44:57'),
            ],
            [
                'id' => 2,
                'name' => 'supporter 1',
                'email' => 'supporter1@plusmagi.internal',
                'email_verified_at' => Carbon::parse('2024-12-12 04:52:10'),
                'password' => '7f6729f1bcf83e3bb5bb1215c9e9b855',
                'remember_token' => 'remember_token',
                'created_at' => Carbon::parse('2024-12-12 04:52:10'),
                'updated_at' => Carbon::parse('2024-12-12 04:52:10'),
            ],
            [
                'id' => 3,
                'name' => 'supporter 2',
                'email' => 'supporter2@plusmagi.internal',
                'email_verified_at' => Carbon::parse('2024-12-12 04:57:10'),
                'password' => 'fb89cd3050bfa2388c55cdbdd9d71126',
                'remember_token' => 'remember_token',
                'created_at' => Carbon::parse('2024-12-12 04:57:10'),
                'updated_at' => Carbon::parse('2024-12-12 04:57:10'),
            ],
            [
                'id' => 4,
                'name' => 'supporter 3',
                'email' => 'supporter3@plusmagi.internal',
                'email_verified_at' => Carbon::parse('2024-12-12 04:57:11'),
                'password' => '4ad8eb6cdac65347da2f0a4882269091',
                'remember_token' => 'remember_token',
                'created_at' => Carbon::parse('2024-12-12 04:57:11'),
                'updated_at' => Carbon::parse('2024-12-12 04:57:11'),
            ],
            [
                'id' => 5,
                'name' => 'supporter 4',
                'email' => 'supporter4@plusmagi.internal',
                'email_verified_at' => Carbon::parse('2024-12-12 04:57:11'),
                'password' => '59849eef7b512344be7f56eb40297339',
                'remember_token' => 'remember_token',
                'created_at' => Carbon::parse('2024-12-12 04:57:11'),
                'updated_at' => Carbon::parse('2024-12-12 04:57:11'),
            ],
        ]);
    }
}
