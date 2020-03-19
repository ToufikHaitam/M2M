<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFicheHebergementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiche_hebergements', function (Blueprint $table) {
            $table->string("nom",30)->nullable($value=false);
            $table->string("profession",30)->nullable($value=false);
            $table->timestamp('date_arrivee');	
            $table->timestamp('date_depart');
            $table->timestamp('date_naissance');
            $table->timestamp('date_delivrance');
            $table->string('pays',32);
            $table->integer('num_piece');
            $table->String('lieu_naissance');	
            $table->integer('nombre_mineurs15');
            $table->integer('nombre_mineurs1518'); 
            $table->integer('num_chmabre');	
            $table->unsignedBigInteger('etblissement_id');
            $table->unsignedBigInteger('sexe_id');

            $table->unsignedBigInteger('motif_id');
            $table->foreign('motif_id')->references('id')->on('motifs');

            $table->unsignedBigInteger('type_piece_id');
            $table->foreign('etblissement_id')->references('id')->on('etblissements');
            $table->foreign('sexe_id')->references('id')->on('sexes');
            $table->foreign('type_piece_id')->references('id')->on('type_pieces');
            $table->bigIncrements('id');
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
        Schema::dropIfExists('_fiche_hebergements');
    }
}
