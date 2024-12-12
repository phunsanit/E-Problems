<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Case ID');

            $table->tinyInteger('status_id')->comment('Status');
            $table->unsignedInteger('category_id')->comment('Category');
            $table->unsignedInteger('vessel_id')->comment('Vessel');
            $table->unsignedTinyInteger('service_lines_id')->comment('Service Lines');
            $table->unsignedBigInteger('support_engineer_id')->comment('Support Engineer ID');
            $table->dateTime('opened_dt')->comment('Opened');
            $table->dateTime('closed_dt')->comment('Closed');
            $table->dateTime('sla_dt')->comment('SLA');
            $table->text('descriptions')->comment('Descriptions');

            $table->timestamps();

            $table->unsignedBigInteger('created_by')->comment('Created By');
            $table->unsignedBigInteger('updated_by')->nullable()->comment('Updated By');
            $table->unsignedBigInteger('deleted_by')->nullable()->comment('Deleted By');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
