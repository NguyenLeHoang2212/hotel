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
        Schema::create('bookings_payment_methods', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('bkg_id');
            $table->foreign('bkg_id')->references('id')->on('bookings');

            $table->string('payment_provider',255)->nullable();
            $table->string('status', 255)->nullable();
            $table->float('total')->nullable()->unsigned();
            $table->string('note',255)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings_payment_methods');
    }
};