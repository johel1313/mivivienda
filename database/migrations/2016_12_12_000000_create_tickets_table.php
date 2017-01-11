<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dni')->unique();
            $table->string('name');
            $table->string('lastname');
            $table->string('type');
            $table->string('job');
            $table->string('fax');
            $table->string('cellphone');
            $table->string('phone');
            $table->string('employee');
            $table->date('trackingDate');
            $table->longText('address');
            $table->string('province');
            $table->string('canton');
            $table->string('district');
            $table->timestamps();
            /*SET USER FOREIGN KEY*/
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            /* SET PROMOTER FOREIGN KEY*/
            $table->integer('promoter_id')->unsigned()->nullable();
            $table->foreign('promoter_id')->references('id')->on('promoters')->onDelete('cascade');
            /*SET BUILDER FOREIGN KEY*/
            $table->integer('builder_id')->unsigned()->nullable();
            $table->foreign('builder_id')->references('id')->on('builders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tickets');
    }
}
