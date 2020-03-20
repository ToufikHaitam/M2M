<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeledeclarationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teledeclarations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('etblissement_id');
            $table->foreign('etblissement_id')->references('id')->on('etblissements'); 
            $table->integer("mois");
            $table->integer("annee");

            $table->double("Montant_declare_nuitee");
            $table->double("Montant_declare_nuitee_resto");
            $table->double("Montant_declare_resto");

            $table->double("Montant_collecte_nuitee");
            $table->double("Montant_collecte_nuitee_resto");
            $table->double("Montant_collecte_resto");

            $table->double("Montant_taxe_collecte_nuitee");
            $table->double("Montant_taxe_collecte_nuitee_resto");
            $table->double("Montant_taxe_collecte_resto");

            $table->double("Montant_taxe_declare_nuitee");
            $table->double("Montant_taxe_declare_nuitee_resto");
            $table->double("Montant_taxe_declare_resto");


            $table->double("Montant_reelement_taxe_nuitee");
            $table->double("Montant_reelement_taxe_nuitee_resto");
            $table->double("Montant_reelement_taxe_resto");

            $table->double("Montant_a_paye_nuitee");
            $table->double("Montant_a_paye_nuitee_resto");
            $table->double("Montant_a_paye_taxe_resto");

            $table->double("paye");
            $table->double("reste_a_paye");

            $table->double("totale");

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
        Schema::dropIfExists('teledeclarations');
    }
}
