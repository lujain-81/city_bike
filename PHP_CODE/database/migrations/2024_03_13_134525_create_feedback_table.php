<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Feedback', function (Blueprint $table) {
            $table->id('FeedbackID');
            $table->unsignedBigInteger('AdminID');
            $table->unsignedBigInteger('CustomerID');
            $table->integer('Rate');
            $table->boolean('Status')->default(false);
            $table->text('Comment');
            $table->foreign('AdminID')->references('AdminID')->on('Admin')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('CustomerID')->references('CustomerID')->on('customer')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Feedback');
    }
}
