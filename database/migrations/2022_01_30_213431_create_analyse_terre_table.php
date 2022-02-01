<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalyseTerreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analyse_terre', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("commande_id");
            $table->float("CT_%")->nullable();
            $table->float("CA_%")->nullable();
            $table->float("PH_Unité_PH")->nullable();
            $table->float("EC_mS_Cm")->nullable();
            $table->float("Cl_mg_Kg")->nullable();
            $table->float("P2O5_mg_Kg")->nullable();
            $table->float("K2O_mg_Kg")->nullable();
            $table->float("Na2O_g_Kg")->nullable();
            $table->float("CaO_g_Kg")->nullable();
            $table->float("MgO_mg_Kg")->nullable();
            $table->float("Zn-EDTA_mg_Kg")->nullable();
            $table->float("Cu-EDTA_mg_Kg")->nullable();
            $table->float("Mn-EDTA_mg_Kg")->nullable();
            $table->float("Fe-EDTA_mg_Kg")->nullable();
            $table->float("NT_‰")->nullable();
            $table->float("C-O_g_Kg")->nullable();
            $table->float("CEC_Cmol_Kg")->nullable();
            $table->float("pH-KCI_Unité_pH")->nullable();
            $table->float("N-NO3_mg_Kg")->nullable();
            $table->float("N-NH4_mg_Kg")->nullable();
            $table->float("Humidité_%")->nullable();
            $table->float("Agrile_‰")->nullable();
            $table->float("Limon_‰")->nullable();
            $table->float("Sable_‰")->nullable();
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
        Schema::dropIfExists('analyse_terre');
    }
}
