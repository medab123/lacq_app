<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalyseVegTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analyse_veg', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("commande_id");
            $table->float("Humidité_%")->nullable();
            $table->float("NTK_%")->nullable();
            $table->float("PT_%")->nullable();
            $table->float("K_%")->nullable();
            $table->float("Na_%")->nullable();
            $table->float("Ca_%")->nullable();
            $table->float("Mg_%")->nullable();
            $table->float("Zn_mg_Kg")->nullable();
            $table->float("Cu_mg_Kg")->nullable();
            $table->float("Mn_mg_Kg")->nullable();
            $table->float("Fe_mg_Kg")->nullable();
            $table->float("B_mg_Kg")->nullable();
            $table->float("Poids_g")->nullable();
            $table->float("S_%")->nullable();
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
        Schema::dropIfExists('analyse_veg');
    }
}
