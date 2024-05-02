<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rental', function (Blueprint $table) {
            $table->id('RentalID');
            $table->unsignedBigInteger('CustomerID');
            $table->unsignedBigInteger('VehicleID');
            $table->date('Date');
            $table->string('TimeFrom');
            $table->string('TimeTo');
            $table->timestamp('FullDateTimeFrom');
            $table->timestamp('FullDateTimeTo');
            $table->boolean('WithHelmet');
            $table->string('Deposit');
            $table->string('Amount');
            $table->string('Status');
            $table->timestamp('RentalDateTime');
            $table->foreign('CustomerID')->references('CustomerID')->on('customer')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('VehicleID')->references('VehicleID')->on('Vehicle')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('VehicleRental', function (Blueprint $table) {
            $table->id('VehicleRentalID');
            $table->unsignedBigInteger('RentalID');
            $table->unsignedBigInteger('VehicleID');
            $table->foreign('RentalID')->references('RentalID')->on('rental')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('VehicleID')->references('VehicleID')->on('Vehicle')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('VehicleRental');
        Schema::dropIfExists('rental');
    }
}
