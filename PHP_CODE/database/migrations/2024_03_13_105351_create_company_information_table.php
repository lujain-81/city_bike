<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CompanyInformation', function (Blueprint $table) {
            $table->id('CompanyID');
            $table->unsignedBigInteger('AdminID');
            $table->string('Name');
            $table->string('Logo');
            $table->string('Phone');
            $table->string('Address');
            $table->string('Email');
            $table->foreign('AdminID')->references('AdminID')->on('Admin')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CompanyInformation');
    }
}
