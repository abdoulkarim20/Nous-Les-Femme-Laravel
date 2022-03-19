<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('nomEntreprise');
            $table->string('conrdonneeGPS');
            $table->timestamps();
            $table->string('siegeSociale');
            $table->date('dateCreation');
            $table->string('registreCommerce');
            $table->string('NINEA');
            $table->string('pageWeb');
            $table->integer('nombreEmployer');
            $table->boolean('contratFormel');
            $table->boolean('organigrammeRespecter');
            $table->boolean('dispositifFormation');
            $table->boolean('questionSociale');
            $table->foreignId('quartier_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('repondant_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('domaine_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('regime_juridique_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('entreprises');
    }
};
