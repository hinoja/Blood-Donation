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
        Schema::create('appointements', function (Blueprint $table) {
            $table->id();


            // $table->uuid('id')->primary();
            // $table->string('title');
            $table->foreignId('hospital_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->dateTime('start');
            $table->dateTime('end')->nullable();
            $table->boolean('is_validated')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointements');
    }
};
