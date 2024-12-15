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
        Schema::create('service_lines_vessels', function (Blueprint $table) {
            $table->unsignedTinyInteger('service_line_id')->length(3)->unsigned()->comment('Service Line ID');
            $table->unsignedBigInteger('vessel_id')->length(3)->unsigned()->comment('Vessel ID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_lines_vessels');
    }
};
