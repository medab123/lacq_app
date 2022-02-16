<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalyseEauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analyse_eau', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("commande_id");
            $table->float("plus_moins")->nullable();
            $table->float("temp")->nullable();
            $table->float("PH")->nullable();
            $table->float("EC")->nullable();
            $table->float("NO3")->nullable();
            $table->float("NO2")->nullable();
            $table->float("NH4")->nullable();
            $table->float("Cl")->nullable();
            $table->float("SO4")->nullable();
            $table->float("H2PO4")->nullable();
            $table->float("HCO3")->nullable();
            $table->float("CO3")->nullable();
            $table->float("K")->nullable();
            $table->float("Na")->nullable();
            $table->float("Ca")->nullable();
            $table->float("Mg")->nullable();
            $table->float("Zn")->nullable();
            $table->float("Cu")->nullable();
            $table->float("Mn")->nullable();
            $table->float("Fe")->nullable();
            $table->float("B")->nullable();
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
        Schema::dropIfExists('analyse_eau');
    }
}
