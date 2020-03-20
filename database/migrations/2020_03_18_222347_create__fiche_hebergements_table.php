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
            $table->dateTime('date_naissance');
            $table->dateTime('date_delivrance');
            $table->string('pays',32);
            $table->integer('num_piece');
            $table->String('lieu_naissance');	
           
            $table->unsignedBigInteger('etblissement_id');
            $table->unsignedBigInteger('sexe_id');

            $table->unsignedBigInteger('motif_id');
            $table->foreign('motif_id')->references('id')->on('motifs');
            $table->unsignedBigInteger('nationalite_id');
            $table->foreign('nationalite_id')->references('id')->on('nationalites');

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
