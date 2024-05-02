<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvailabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Availability', function (Blueprint $table) {
            $table->id('AvailabilityID');
            $table->unsignedBigInteger('VehicleID');
            $table->foreign('VehicleID')->references('VehicleID')->on('Vehicle')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamp('DateTime');
            $table->string('Status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Availability');
    }
}
