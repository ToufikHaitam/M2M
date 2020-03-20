<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtblissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etblissements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string("nom")->nullable($value=false);
            $table->string("adresse")->nullable($value=false);
            $table->integer("capacite")->nullable($value=false);
             
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('sous_type_id');
            $table->unsignedBigInteger('forchette_id');
            $table->unsignedBigInteger('categerie_etablissement_id');

            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('sous_type_id')->references('id')->on('sous_types');
            $table->foreign('categerie_etablissement_id')->references('id')->on('categerie_etablissements');
            $table->foreign('forchette_id')->references('id')->on('forchettes');

               
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etblissements');
    }
}
