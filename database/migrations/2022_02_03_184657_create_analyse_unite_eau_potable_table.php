<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalyseUniteEauPotableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analyse_unite_eau_potable', function (Blueprint $table) {
            $table->id();
            $table->string("parametre")->nullable();
            $table->string("unite")->nullable();
            $table->timestamps();
        });

        DB::table('analyse_unite_eau_potable')->insert(
            array(
                array(
                    'id' => '1',
                    'parametre' => "temp",
                    "unite" => "°C",
                ),
                array(
                    'id' => '2',
                    'parametre' => "Cl2",
                    "unite" => "ppm",
                ),
                array(
                    'id' => '3',
                    'parametre' => "O2",
                    "unite" => "ppm",
                ),
                array(
                    'id' => '4',
                    'parametre' => "PH",
                    "unite" => "Unite_pH",
                ),
                array(
                    'id' => '5',
                    'parametre' => "EC",
                    "unite" => "mS_Cm",
                ),
                
                array(
                    'id' => '6',
                    'parametre' => "NO3",
                    "unite" => "ppm",
                ),
                array(
                    'id' => '7',
                    'parametre' => "NO2",
                    "unite" => "ppm",
                ),
                array(
                    'id' => '8',
                    'parametre' => "NH4",
                    "unite" => "ppm",
                ),
                array(
                    'id' => '9',
                    'parametre' => "Cl",
                    "unite" => "ppm",
                ),
                array(
                    'id' => '10',
                    'parametre' => "SO4",
                    "unite" => "ppm",
                ),
                array(
                    'id' => '11',
                    'parametre' => "HCO3",
                    "unite" => "ppm",
                ),
                array(
                    'id' => '12',
                    'parametre' => "CO3",
                    "unite" => "ppm",
                ),
                array(
                    'id' => '13',
                    'parametre' => "Ca",
                    "unite" => "ppm",
                ),
                array(
                    'id' => '14',
                    'parametre' => "Mg",
                    "unite" => "ppm",
                ),
                array(
                    'id' => '15',
                    'parametre' => "Oxydabilite",
                    "unite" => "ppm",
                ),
                array(
                    'id' => '16',
                    'parametre' => "Turbidite",
                    "unite" => "NTU",
                ),
                array(
                    'id' => '17',
                    'parametre' => "Zn",
                    "unite" => "ppm",
                ),
                array(
                    'id' => '18',
                    'parametre' => "Cu",
                    "unite" => "ppm",
                ),
                array(
                    'id' => '19',
                    'parametre' => "Mn",
                    "unite" => "ppm",
                ),
                array(
                    'id' => '20',
                    'parametre' => "Fe",
                    "unite" => "ppm",
                ),
                array(
                    'id' => '21',
                    'parametre' => "B",
                    "unite" => "ppm",
                )
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('analyse_unite_eau_potable');
    }
}
