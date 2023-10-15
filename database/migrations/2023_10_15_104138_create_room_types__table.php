<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('room_types', function (Blueprint $table) {
            $table->id();
            $table->string('room_name')->nullable();
            $table->timestamps();
        });

        DB::table('room_types')->insert([
            ['room_name' => 'Single room'],
            ['room_name' => 'Classic Room'],
            ['room_name' => 'Superior Room'],
            ['room_name' => 'Family Suite'],
            ['room_name' => 'Presidential Suite'],
            ['room_name' => 'Luxury appartment'],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('room_types');
    }
};
