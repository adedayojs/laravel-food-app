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
        Schema::create('meal_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('price');
            $table->integer('number');
            $table->string('user');
            $table->string('location');
            $table->string('phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meal_requests');
    }
};
