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
        Schema::create('categories', function (Blueprint $table) {
            $table->unsignedTinyInteger('id', true)->comment('Category ID');

            $table->boolean('enable')->default(true)->comment('Enable');
            $table->unsignedTinyInteger('priority_id')->comment('Priority');
            $table->string('title', 100)->comment('Title');
            $table->string('description', 500)->comment('Description');

            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Categories');
    }
};
