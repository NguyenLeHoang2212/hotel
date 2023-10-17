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
        Schema::create('bookings_rooms', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('bkg_id');
            $table->foreign('bkg_id')->references('id')->on('bookings');

            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('id')->on('rooms');

            $table->string('room_name', 255)->nullable();
            $table->float('room_price')->nullable()->unsigned();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings_rooms');
    }
};