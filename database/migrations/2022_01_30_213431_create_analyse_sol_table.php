<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalyseSolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analyse_sol', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("commande_id");
            $table->float("CT")->nullable();
            $table->float("CA")->nullable();
            $table->float("PH")->nullable();
            $table->float("EC")->nullable();
            $table->float("Cl")->nullable();
            $table->float("P2O5")->nullable();
            $table->float("K2O")->nullable();
            $table->float("Na2O")->nullable();
            $table->float("CaO")->nullable();
            $table->float("MgO")->nullable();
            $table->float("Zn_EDTA")->nullable();
            $table->float("Cu_EDTA")->nullable();
            $table->float("Mn_EDTA")->nullable();
            $table->float("Fe_EDTA")->nullable();
            $table->float("NT")->nullable();
            $table->float("C_O")->nullable();
            $table->float("CEC")->nullable();
            $table->float("pH_KCI")->nullable();
            $table->float("N_NO3")->nullable();
            $table->float("N_NH4")->nullable();
            $table->float("Humidite")->nullable();
            $table->float("Agrile")->nullable();
            $table->float("Limon")->nullable();
            $table->float("Sable")->nullable();
            $table->foreign('commande_id')->references('id')->on('commandes')->onDelete('cascade')->onUpdate('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('analyse_sol');
    }
}
