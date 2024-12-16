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

        Schema::table('team_user', function (Blueprint $table) {
            $table->foreign('user_id', 'fk_team_user_users')
                ->references('id')
                ->on('users');
        });

        Schema::table('teams', function (Blueprint $table) {
            $table->foreign('user_id', 'fk_teams_users')
                ->references('id')
                ->on('users');
        });

        Schema::table('tickets', function (Blueprint $table) {
            $table->foreign('category_id', 'fk_tickets_categories')->references('id')->on('categories');
            $table->foreign('created_by', 'fk_tickets_users_created_by')->references('id')->on('users')->onDelete('no action')->onUpdate('no action');
            $table->foreign('deleted_by', 'fk_tickets_users_deleted_by')->references('id')->on('users')->onDelete('no action')->onUpdate('no action');
            $table->foreign('support_engineer_id', 'fk_tickets_users_support_engineer_id')->references('id')->on('users')->onDelete('no action')->onUpdate('no action');
            $table->foreign('updated_by', 'fk_tickets_users_updated_by')->references('id')->on('users')->onDelete('no action')->onUpdate('no action');
            $table->foreign('vessel_id', 'fk_tickets_vessels')->references('id')->on('vessels')->onDelete('no action')->onUpdate('no action');
        });

        Schema::table('vessels', function (Blueprint $table) {
            $table->foreign('organization_id', 'fk_vessels_organizations')
                ->references('id')
                ->on('organizations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('service_lines_vessels', function (Blueprint $table) {
            $table->dropForeign('fk_service_lines_vessels_service_lines');
            $table->dropForeign('fk_service_lines_vessels_vessels');
            $table->dropUnique('unique_service_line_vessel');
        });

        Schema::table('team_user', function (Blueprint $table) {
            $table->dropForeign('fk_team_user_users');
        });

        Schema::table('teams', function (Blueprint $table) {
            $table->dropForeign('fk_teams_users');
        });

        Schema::table('tickets', function (Blueprint $table) {
            $table->dropForeign('fk_tickets_categories');
            $table->dropForeign('fk_tickets_users_created_by');
            $table->dropForeign('fk_tickets_users_deleted_by');
            $table->dropForeign('fk_tickets_users_support_engineer_id');
            $table->dropForeign('fk_tickets_users_updated_by');
            $table->dropForeign('fk_tickets_vessels');
        });

        Schema::table('vessels', function (Blueprint $table) {
            $table->dropForeign('fk_vessels_organizations');
        });
    }
};
