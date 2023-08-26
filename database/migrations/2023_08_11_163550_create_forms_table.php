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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('place');
            $table->dateTime('date');
            $table->string('category');
            $table->string('description');
            $table->string('where');
            $table->string('alarm');
            $table->string('people');
            $table->string('mode');
            $table->string('confirm');
            $table->string('info');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
