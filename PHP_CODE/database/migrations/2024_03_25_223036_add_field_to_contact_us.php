<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToContactUs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Contact_Us', function (Blueprint $table) {
            $table->unsignedBigInteger('EmployeeID')->nullable()->after('AdminID');
            $table->foreign('EmployeeID')->references('EmployeeID')->on('employee')->onUpdate('cascade')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Contact_Us', function (Blueprint $table) {
            //
        });
    }
}
