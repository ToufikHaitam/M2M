<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSousTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sous_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("soustype")->nullable($value=false);
            $table->timestamps();
            $table->unsignedBigInteger('type_id');

            $table->foreign('type_id')
            ->references('id')->on('types')
             ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_sous_types');
    }
}
