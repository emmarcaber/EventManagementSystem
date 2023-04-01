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
        Schema::create('attendees', function (Blueprint $table) {
            $table->bigIncrements('AttendeeID');
            $table->bigInteger('EventID')->unsigned();
            $table->bigInteger('VenueID')->unsigned();
            $table->string('AttendeeName');
            $table->string('Email');
            $table->integer('PhoneNumber');

            $table->foreign('EventID')
                ->references('EventID')
                ->on('events')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->foreign('VenueID')
                ->references('VenueID')
                ->on('venues')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendees');
    }
};
