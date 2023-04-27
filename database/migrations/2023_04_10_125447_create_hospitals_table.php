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
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug');
            $table->string('email')->unique();
            $table->date('birth');
            $table->float('longitude');
            $table->float('latitude');
            $table->string('urgenceNumber');
            $table->string('town')->nullable();
            $table->string('country')->nullable();
            $table->string('region')->nullable();
            $table->string('logo');
            $table->longText('description')->nullable();
            $table->longText('description_file')->nullable();
            $table->string('siteInternet')->nullable();
            $table->time('ends_at')->nullable();
            // $table->foreignId('daysHospital_id')->constrained();
            $table->time('starts_at')->nullable();
            // $table->string('day')->nullable();
            $table->boolean('is_active')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospitals');
    }
};
