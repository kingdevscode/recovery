<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Demandes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function(BluePrint $table){
            $table->increments('id');
            $table->date('date_demande')->nullable();
            $table->date('date_traitement')->nullable();
            $table->enum('statut', ['attente', 'acceptée', 'rejetée'])->nullable()->default('attente');

            $table->unsignedInteger('id_client');
            $table->unsignedInteger('id_user')->nullable();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_client')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
