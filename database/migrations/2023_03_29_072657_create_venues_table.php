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
        Schema::create('venues', function (Blueprint $table) {
            $table->bigIncrements('VenueID');
            $table->bigInteger('EventID')->unsigned();
            $table->string('VenueName');
            $table->string('Address');
            $table->integer('Capacity');
            $table->enum('Availability', ['Yes','No']);

            $table->foreign('EventID')
                ->references('EventID')
                ->on('events')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venue');
    }
};
