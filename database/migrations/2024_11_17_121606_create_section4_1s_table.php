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
        Schema::create('section4_1s', function (Blueprint $table) {
            $table->id();  // Primary key column
            $table->string('education');
            $table->string('from_where');
            $table->text('details');
            $table->string('gpa') -> nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section4_1s');
    }
};
