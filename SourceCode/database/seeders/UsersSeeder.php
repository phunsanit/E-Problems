<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTime = Carbon::now();

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'User',
                'email' => 'user@plusmagi.internal',
                'email_verified_at' => null,
                'password' => Hash::make('ZhDbjptFzegDHkGUS3fYT6W42AKeNKcn'),
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 2,
                'name' => 'Supporter 1',
                'email' => 'supporter1@plusmagi.internal',
                'email_verified_at' => null,
                'password' => Hash::make('Fy6VLmkwRNNnTgvpFDUFdFjN3yqavqHN'),
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 3,
                'name' => 'Supporter 2',
                'email' => 'supporter2@plusmagi.internal',
                'email_verified_at' => null,
                'password' => Hash::make('PCK9vDcE4MeXnqyRkXncGGpFh4zVyT6E'),
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 4,
                'name' => 'Supporter 3',
                'email' => 'supporter3@plusmagi.internal',
                'email_verified_at' => null,
                'password' => Hash::make('NahBmwdcEw96H3ZMQ4BGsfsfbq3rECGz'),
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 5,
                'name' => 'Supporter 4',
                'email' => 'supporter4@plusmagi.internal',
                'email_verified_at' => null,
                'password' => Hash::make('VTqWvphc8tbFqx8f6wKPUQknTxGYMP5H'),
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 6,
                'name' => 'Administrator',
                'email' => 'administrator@plusmagi.internal',
                'email_verified_at' => null,
                'password' => Hash::make('eMQbyvz8qZahWSjeK5rpAEdDeGqP7sKy'),
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
        ]);
    }
}
