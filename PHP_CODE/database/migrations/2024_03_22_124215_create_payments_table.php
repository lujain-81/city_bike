<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Payment', function (Blueprint $table) {
            $table->id('PaymentID');
            $table->unsignedBigInteger('RentalID');
            $table->foreign('RentalID')->references('RentalID')->on('rental')->onUpdate('cascade')->onDelete('cascade');
            $table->string('CVV');
            $table->string('CardNumber');
            $table->string('ExpireDate');
            $table->string('Amount');
            $table->string('Block');
            $table->string('PaymentStatus');
        });
        Schema::create('Canecllation', function (Blueprint $table) {
            $table->id('CanecllationID');
            $table->unsignedBigInteger('RentalID');
            $table->foreign('RentalID')->references('RentalID')->on('rental')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamp('DateTime');
            $table->text('Reasons');
        });
        Schema::create('Invoice', function (Blueprint $table) {
            $table->id('InvoiceID');
            $table->unsignedBigInteger('RentalID');
            $table->foreign('RentalID')->references('RentalID')->on('rental')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamp('DateTime');
            $table->string('TotalAmount');
            $table->string('TotalAfterTax');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Invoice');
        Schema::dropIfExists('Canecllation');
        Schema::dropIfExists('Payment');
    }
}
