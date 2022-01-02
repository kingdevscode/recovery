<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Signales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('signales', function(BluePrint $table){
            $table->increments('id');
            $table->UnsignedInteger('id_categorie')->nullable();
            $table->UnsignedInteger('id_client');
            $table->string('description');
            $table->string('lieu_perte')->nullable();
            $table->date('date_perte')->nullable();
            $table->enum('statut', ['attente', 'retrouvé', 'introuvable'])->nullable()->default('attente');

            $table->foreign('id_categorie')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_client')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
        });
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
