<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contact_Us', function (Blueprint $table) {
            $table->id('ContactID');
            $table->unsignedBigInteger('AdminID');
            $table->unsignedBigInteger('CustomerID');
            $table->unsignedBigInteger('Replay')->nullable();
            $table->string('Subject');
            $table->text('Message');
            $table->foreign('AdminID')->references('AdminID')->on('Admin')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('CustomerID')->references('CustomerID')->on('customer')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('Replay')->references('ContactID')->on('Contact_Us')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Contact_Us');
    }
}
