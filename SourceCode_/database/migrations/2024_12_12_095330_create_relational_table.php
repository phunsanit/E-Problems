<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//add Relational Constraints to the tables
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
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
            $table->foreign('service_line_id', 'fk_service_lines_vessels_service_lines')
                ->references('id')
                ->on('service_lines')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('vessel_id', 'fk_service_lines_vessels_vessels')
                ->references('id')
                ->on('vessels')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->unique(['service_line_id', 'vessel_id'], 'unique_service_line_vessel');
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
    public function down(): void
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
};
