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
            $table->float("Humidité")->nullable();
            $table->float("NTK")->nullable();
            $table->float("PT")->nullable();
            $table->float("K")->nullable();
            $table->float("Na")->nullable();
            $table->float("Ca")->nullable();
            $table->float("Mg")->nullable();
            $table->float("Zn")->nullable();
            $table->float("Cu")->nullable();
            $table->float("Mn")->nullable();
            $table->float("Fe")->nullable();
            $table->float("B")->nullable();
            $table->float("Poids")->nullable();
            $table->float("S")->nullable();
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
