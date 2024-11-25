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
        Schema::create('section1s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('job');
            $table->text('description');
            $table->string('facebook_link')->nullable();
            $table->string('instgram_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section1s');
    }
};