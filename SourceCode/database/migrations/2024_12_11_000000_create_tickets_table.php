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
            $table->id()->comment('Case ID');

            $table->tinyInteger('status_id')->comment('Status');
            $table->unsignedTinyInteger('category_id')->comment('Category');
            $table->unsignedBigInteger('vessel_id')->comment('Vessel');
            $table->unsignedTinyInteger('service_line_id')->comment('Service Lines');
            $table->unsignedBigInteger('support_engineer_id')->nullable()->comment('Support Engineer ID');
            $table->dateTime('sla_dt')->nullable()->comment('SLA');
            $table->integer('working_time', false, true)->length(4)->nullable()->comment('Working Time');
            $table->text('descriptions')->comment('Descriptions');

            //$table->timestamps();

            $table->dateTime('created_at')->nullable()->comment('Created At');
            $table->unsignedBigInteger('created_by')->comment('Created By');

            $table->dateTime('updated_at')->nullable()->comment('Updated At');
            $table->unsignedBigInteger('updated_by')->nullable()->comment('Updated By');

            $table->dateTime('deleted_at')->nullable()->comment('Deteled At');
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
