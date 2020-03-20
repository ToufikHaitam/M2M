<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurationSeulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restauration_seules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double("montant_restoration");
            $table->double("montant_boissons");
            $table->double("montant_supplimentaires");
            $table->unsignedBigInteger('etblissement_id');
            $table->foreign('etblissement_id')->references('id')->on('etblissements'); 
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
        Schema::dropIfExists('_restauration_seules');
    }
}
