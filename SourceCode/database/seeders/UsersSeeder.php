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
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'two_factor_confirmed_at' => null,
                'profile_photo_path' => null,
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 2,
                'name' => 'Supporter 1',
                'email' => 'supporter1@plusmagi.internal',
                'email_verified_at' => null,
                'password' => Hash::make('Fy6VLmkwRNNnTgvpFDUFdFjN3yqavqHN'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'two_factor_confirmed_at' => null,
                'profile_photo_path' => null,
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 3,
                'name' => 'Supporter 2',
                'email' => 'supporter2@plusmagi.internal',
                'email_verified_at' => null,
                'password' => Hash::make('PCK9vDcE4MeXnqyRkXncGGpFh4zVyT6E'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'two_factor_confirmed_at' => null,
                'profile_photo_path' => null,
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 4,
                'name' => 'Supporter 3',
                'email' => 'supporter3@plusmagi.internal',
                'email_verified_at' => null,
                'password' => Hash::make('NahBmwdcEw96H3ZMQ4BGsfsfbq3rECGz'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'two_factor_confirmed_at' => null,
                'profile_photo_path' => null,
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 5,
                'name' => 'Supporter 4',
                'email' => 'supporter4@plusmagi.internal',
                'email_verified_at' => null,
                'password' => Hash::make('VTqWvphc8tbFqx8f6wKPUQknTxGYMP5H'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'two_factor_confirmed_at' => null,
                'profile_photo_path' => null,
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 6,
                'name' => 'Supporter 5',
                'email' => 'supporter5@plusmagi.internal',
                'email_verified_at' => null,
                'password' => Hash::make('3SHdpszVdf43PH9hNsfc7pLLW9Rg7858'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'two_factor_confirmed_at' => null,
                'profile_photo_path' => null,
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 7,
                'name' => 'Administrator',
                'email' => 'administrator@plusmagi.internal',
                'email_verified_at' => null,
                'password' => Hash::make('eMQbyvz8qZahWSjeK5rpAEdDeGqP7sKy'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'two_factor_confirmed_at' => null,
                'profile_photo_path' => null,
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
        ]);
    }
}
