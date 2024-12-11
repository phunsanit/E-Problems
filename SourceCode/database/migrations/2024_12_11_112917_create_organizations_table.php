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
        /**
         * php artisan migrate --path=/database/migrations/2024_12_11_112917_create_organizations_table.php
         */
        Schema::create('organizations', function (Blueprint $table) {
            $table->id()->comment('Organization ID');

            $table->boolean('enable')->default(true)->comment('Enable');

            $table->string('title', 256)->unique();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations');
    }
};
