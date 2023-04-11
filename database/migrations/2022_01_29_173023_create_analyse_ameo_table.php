<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalyseAmeoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analyse_ameo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("commande_id");
            $table->float("MS")->nullable();
            
            $table->string("Etat")->nullable();
            $table->float("PH")->nullable();
            $table->float("EC")->nullable();
            $table->float("NTK")->nullable();
            $table->float("PT")->nullable();
            $table->float("K")->nullable();
            $table->float("Na")->nullable();
            $table->float("Ca")->nullable();
            $table->float("Mg")->nullable();
            $table->float("M_O")->nullable();
            $table->float("Zn")->nullable();
            $table->float("Cu")->nullable();
            $table->float("Mn")->nullable();
            $table->float("Fe")->nullable();
            $table->float("B")->nullable();
            $table->float("Cl")->nullable();
            $table->float("MN_NH4")->nullable();
            $table->float("N_NO3")->nullable();
            $table->float("As")->nullable();
            $table->float("Cd")->nullable();
            $table->float("Co")->nullable();
            $table->float("Cr")->nullable();
            $table->float("Hg")->nullable();
            $table->float("Mo")->nullable();
            $table->float("Ni")->nullable();
            $table->float("Pb")->nullable();
            $table->float("Se")->nullable();
            $table->float("M_V")->nullable();
            $table->float("Refus")->nullable();
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
        Schema::dropIfExists('analyse_ameo');
    }
}
