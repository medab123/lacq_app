<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalyseEapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analyse_eap', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("commande_id");
            $table->float("PH_Unité_PH")->nullable();
            $table->float("PH-Kcl_Unité_PH")->nullable();
            $table->float("EC_mS_Cm")->nullable();
            $table->float("NO3_mg_l")->nullable();
            $table->float("NO2_mg_l")->nullable();
            $table->float("NH4_mg_l")->nullable();
            $table->float("Cl_mg_l")->nullable();
            $table->float("SO4_mg_l")->nullable();
            $table->float("P_mg_l")->nullable();
            $table->float("K_mg_l")->nullable();
            $table->float("Na_mg_l")->nullable();
            $table->float("Ca_mg_l")->nullable();
            $table->float("Mg_mg_l")->nullable();
            $table->float("Zn-EDTA_mg_l")->nullable();
            $table->float("Cu-EDTA_mg_l")->nullable();
            $table->float("Mn-EDTA_mg_l")->nullable();
            $table->float("Fe-EDTA_mg_l")->nullable();
            $table->float("NT_‰")->nullable();
            $table->float("C-O_g_Kg")->nullable();
            $table->float("HCO3_mg_l")->nullable();
            $table->float("Ms_%")->nullable();
            $table->float("Bore_mg_Kg")->nullable();
            $table->float("Bilan")->nullable();
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
        Schema::dropIfExists('analyse_eap');
    }
}
