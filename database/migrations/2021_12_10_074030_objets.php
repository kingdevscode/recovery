<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Objets extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objets', function(BluePrint $table){
            $table->increments('id');
            $table->String('nom_objet')->nullable();
            $table->String('lieu_trouvail')->nullable();
            $table->date('date_trouvail')->nullable();
            $table->date('date_enregistrement')->nullable();
            $table->date('date_restitution')->nullable();
            $table->enum('statut_objet', ['attente', 'demandé','restitué'])->nullable()->default('attente');
            $table->String('description_o')->nullable();
            $table->String('photo')->nullable();
            $table->integer('id_categorie')->unsigned();
            $table->integer('id_user')->unsigned();

            $table->foreign('id_categorie')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
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
 Schema::dropIfExists('objets');
}
}
