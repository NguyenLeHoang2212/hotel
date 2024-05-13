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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('bkg_id');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');           $table->string('name')->nullable();
            $table->string('room_type')->nullable();
            $table->string('total_numbers')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('arrival_date')->nullable();
            $table->string('depature_date')->nullable();
            $table->string('email')->nullable();
            $table->string('ph_number')->nullable();
            $table->string('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};