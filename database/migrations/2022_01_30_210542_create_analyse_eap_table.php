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
            $table->float("PH")->nullable();
            $table->float("PH_Kcl")->nullable();
            $table->float("EC")->nullable();
            $table->float("NO3")->nullable();
            $table->float("NO2")->nullable();
            $table->float("NH4")->nullable();
            $table->float("Cl")->nullable();
            $table->float("SO4")->nullable();
            $table->float("P")->nullable();
            $table->float("K")->nullable();
            $table->float("Na")->nullable();
            $table->float("Ca")->nullable();
            $table->float("Mg")->nullable();
            $table->float("Zn")->nullable();
            $table->float("Cu")->nullable();
            $table->float("Mn")->nullable();
            $table->float("Fe")->nullable();
            $table->float("NT")->nullable();
            $table->float("C_O")->nullable();
            $table->float("HCO3")->nullable();
            $table->float("Ms")->nullable();
            $table->float("Bore")->nullable();
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
