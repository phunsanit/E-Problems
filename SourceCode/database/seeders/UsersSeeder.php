<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'User',
                'email' => 'user@plusmagi.internal',
                'email_verified_at' => null,
                'password' => Hash::make('password1'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'two_factor_confirmed_at' => null,
                'remember_token' => null,
                'current_team_id' => 1,
                'profile_photo_path' => null,
                'created_at' => '2024-12-15 19:22:25',
                'updated_at' => '2024-12-15 19:22:25',
            ],
            [
                'id' => 2,
                'name' => 'supporter 1',
                'email' => 'supporter1@plusmagi.internal',
                'email_verified_at' => null,
                'password' => Hash::make('password2'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'two_factor_confirmed_at' => null,
                'remember_token' => null,
                'current_team_id' => 3,
                'profile_photo_path' => null,
                'created_at' => '2024-12-15 19:30:57',
                'updated_at' => '2024-12-15 19:30:57',
            ],
            [
                'id' => 3,
                'name' => 'supporter 2',
                'email' => 'supporter2@plusmagi.internal',
                'email_verified_at' => null,
                'password' => Hash::make('password3'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'two_factor_confirmed_at' => null,
                'remember_token' => null,
                'current_team_id' => 4,
                'profile_photo_path' => null,
                'created_at' => '2024-12-15 19:32:07',
                'updated_at' => '2024-12-15 19:32:07',
            ],
            [
                'id' => 4,
                'name' => 'supporter 3',
                'email' => 'supporter3@plusmagi.internal',
                'email_verified_at' => null,
                'password' => Hash::make('password4'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'two_factor_confirmed_at' => null,
                'remember_token' => null,
                'current_team_id' => 5,
                'profile_photo_path' => null,
                'created_at' => '2024-12-15 19:32:46',
                'updated_at' => '2024-12-15 19:32:46',
            ],
            [
                'id' => 5,
                'name' => 'supporter 4',
                'email' => 'supporter4@plusmagi.internal',
                'email_verified_at' => null,
                'password' => Hash::make('password5'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'two_factor_confirmed_at' => null,
                'remember_token' => null,
                'current_team_id' => 6,
                'profile_photo_path' => null,
                'created_at' => '2024-12-15 19:33:27',
                'updated_at' => '2024-12-15 19:33:27',
            ],
            [
                'id' => 6,
                'name' => 'supporter 5',
                'email' => 'supporter5@plusmagi.internal',
                'email_verified_at' => null,
                'password' => Hash::make('password6'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'two_factor_confirmed_at' => null,
                'remember_token' => null,
                'current_team_id' => 7,
                'profile_photo_path' => null,
                'created_at' => '2024-12-15 19:33:56',
                'updated_at' => '2024-12-15 19:33:56',
            ],
            [
                'id' => 7,
                'name' => 'Administrator',
                'email' => 'administrator@plusmagi.internal',
                'email_verified_at' => null,
                'password' => Hash::make('password7'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'two_factor_confirmed_at' => null,
                'remember_token' => null,
                'current_team_id' => 2,
                'profile_photo_path' => null,
                'created_at' => '2024-12-15 19:26:11',
                'updated_at' => '2024-12-15 19:26:11',
            ],
        ]);
    }
}
