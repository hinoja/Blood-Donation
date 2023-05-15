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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('userable_id')->nullable();
            $table->string('userable_type')->nullable();
            $table->string('name');
            $table->ipAddress('ip')->default('127.0.0.1');
            $table->foreignId('role_id')->constrained();
            $table->string('location')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('avatar')->nullable();
            $table->string('password');
            $table->timestamp('last_seen')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('birth_date')->nullable();
            $table->boolean('is_active')->default(true);
            $table->rememberToken();
            $table->string('device_key')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
