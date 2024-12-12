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
        Schema::create('service_lines', function (Blueprint $table) {
            $table->increments('id')->comment('Service Line');

            $table->boolean('enable')->default(true)->comment('Enable');
            $table->unsignedBigInteger('organization_id');
            $table->string('title', 100)->comment('Title');
            $table->string('descriptions', 500)->comment('Descriptions');

            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_lines');
    }
};
