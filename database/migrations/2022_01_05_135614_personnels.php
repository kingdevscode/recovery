<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Personnels extends Migration
{

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('personnels', function (Blueprint $table) {
                $table->increments('id');
                $table->string('poste');
                $table->string('description')->nullable();

                $table->integer('id_user')->unsigned();
                $table->integer('id_agence')->unsigned();

                $table->foreign('id_agence')->references('id')->on('agences')->onDelete('cascade')->onUpdate('cascade');
                $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('personnels');
        }
}
