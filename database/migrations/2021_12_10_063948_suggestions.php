<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference as ReferenceReference;

class Suggestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('suggestions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->timestamp('posted_at')->nullable();
            $table->integer('id_client')->unsigned();

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
