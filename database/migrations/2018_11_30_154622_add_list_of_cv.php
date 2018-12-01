<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddListOfCv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvlists', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->text('message');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->string('path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cvlists');
    }
}
