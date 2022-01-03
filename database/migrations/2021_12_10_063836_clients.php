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
            $table->string('name_client');
            $table->string('prenom_client')->nullable();
            $table->string('num_cni_c')->nullable();
            $table->string('telephone_c')->nullable();
            $table->string('photo_c')->nullable();
            $table->string('ville_c')->nullable();
            $table->string('quartier_c')->nullable();

            $table->string('email_c')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password_client');
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
