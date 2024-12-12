<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /* used UsersSeeder.php
        User::factory()->create([
        'name' => 'Test User',
        'email' => 'test@example.com',
        ]);
         */

        // call other seeders
        $this->call([
            // add user first
            UsersSeeder::class,

            // add other tables
            CategoriesSeeder::class,
            OrganizationsSeeder::class,
            ServiceLinesSeeder::class,
            ServiceLinesVesselsSeeder::class,
            SupportEngineerSeeder::class,
            VesselsSeeder::class,

            //add at last
            TicketsSeeder::class,
        ]);

        //add Relational Constraints
        Schema::table('tickets', function (Blueprint $table) {
            $table->foreign('category_id', 'fk_tickets_categories')
                ->references('id')
                ->on('categories');

            $table->foreign('support_engineer_id', 'fk_tickets_support_engineer')
                ->references('user_id')
                ->on('support_engineer');

            $table->foreign('vessel_id', 'fk_tickets_vessels')
                ->references('id')
                ->on('vessels');
        });

        Schema::table('vessels', function (Blueprint $table) {
            $table->foreign('organization_id', 'fk_vessels_organizations')
                ->references('id')
                ->on('organizations');
        });

        Schema::table('service_lines_vessels', function (Blueprint $table) {
            $table->foreign('service_line_id', 'fk_service_lines')
                ->references('id')
                ->on('service_lines');

            $table->foreign('vessel_id', 'fk_vessels')
                ->references('id')
                ->on('vessels');

            $table->unique(['vessel_id', 'service_line_id'], 'service_lines_vessels_vessel_id_service_line_id_unique');
        });

        Schema::table('support_engineer', function (Blueprint $table) {
            $table->foreign('user_id', 'fk_support_engineer_users')
                ->references('id')
                ->on('users');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->dropForeign('fk_tickets_categories');
            $table->dropForeign('fk_tickets_support_engineer');
            $table->dropForeign('fk_tickets_vessels');
        });

        Schema::table('vessels', function (Blueprint $table) {
            $table->dropForeign('fk_vessels_organizations');
        });

        Schema::table('service_lines_vessels', function (Blueprint $table) {
            $table->dropForeign('fk_service_lines');
            $table->dropForeign('fk_vessels');
        });

        Schema::table('support_engineer', function (Blueprint $table) {
            $table->dropForeign('fk_support_engineer_users');
        });
    }
}
