<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalyseEauPotableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analyse_eau_potable', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("commande_id");
            $table->float("temp_°C")->nullable();
            $table->float("Cl2_ppm")->nullable();
            $table->float("O2_ppm")->nullable();
            $table->float("PH_Unité_PH")->nullable();
            $table->float("EC_mS_Cm")->nullable();
            $table->float("NO3_ppm")->nullable();
            $table->float("NO2_ppm")->nullable();
            $table->float("NH4_ppm")->nullable();
            $table->float("Cl_ppm")->nullable();
            $table->float("SO4_ppm")->nullable();
            $table->float("HCO3_ppm")->nullable();
            $table->float("CO3_ppm")->nullable();
            $table->float("Ca_ppm")->nullable();
            $table->float("Mg_ppm")->nullable();
            $table->float("Oxydabilite")->nullable();
            $table->float("Turbidite")->nullable();
            $table->float("Zn_ppm")->nullable();
            $table->float("Cu_ppm")->nullable();
            $table->float("Mn_ppm")->nullable();
            $table->float("Fe_ppm")->nullable();
            $table->float("B_ppm")->nullable();
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
        Schema::dropIfExists('analyse_eau_potable');
    }
}
