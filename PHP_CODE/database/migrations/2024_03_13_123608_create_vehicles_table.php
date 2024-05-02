<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vehicle', function (Blueprint $table) {
            $table->id('VehicleID');
            $table->unsignedBigInteger('AdminID');
            $table->unsignedBigInteger('SpotID');
            $table->string('CodNumber');
            $table->string('Model');
            $table->string('Type');
            $table->string('Manufacturer');
            $table->string('Image');
            $table->string('QRCode');
            $table->double('Price', 2);
            $table->foreign('AdminID')->references('AdminID')->on('Admin')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('SpotID')->references('SpotID')->on('Spots')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Vehicle');
    }
}
