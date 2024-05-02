<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id('EmployeeID');
            $table->unsignedBigInteger('AdminID');
            $table->foreign('AdminID')->references('AdminID')->on('Admin')->onUpdate('cascade')->onDelete('cascade');
            $table->string('Name');
            $table->string('Email')->unique();
            $table->string('Phone')->unique();
            $table->string('Password');
            $table->double('Salary', 2)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
