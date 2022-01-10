<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       //
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');

            $table->string('photo_c')->nullable();
            $table->string('ville_c')->nullable();
            $table->string('quartier_c')->nullable();
            $table->integer('id_user')->unsigned();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
