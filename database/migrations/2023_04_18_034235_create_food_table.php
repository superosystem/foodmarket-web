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
        Schema::create('food', function (Blueprint $table) {
            $table->id();

            $table->text('picture_path')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->text('ingredients')->nullable();
            $table->integer('price')->nullable();
            $table->double('rate')->nullable();
            $table->string('types')->default('');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food');
    }
};
