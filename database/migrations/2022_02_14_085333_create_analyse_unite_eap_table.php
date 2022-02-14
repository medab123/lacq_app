<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalyseUniteEapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analyse_unite_eap', function (Blueprint $table) {
            $table->id();
            $table->string("parametre")->nullable();
            $table->string("unite")->nullable();
            $table->timestamps();
        });

        DB::table('analyse_unite_eap')->insert(
            array(
                array(
                    'id' => '1',
                    'parametre' => "PH",
                    "unite" => "Unite_pH",
                ), 
                array(
                    'id' => '2',
                    'parametre' => "PH_kcl",
                    "unite" => "Unite_pH",
                ),
                array(
                    'id' => '3',
                    'parametre' => "EC",
                    "unite" => "mS_Cm",
                ),
                array(
                    'id' => '4',
                    'parametre' => "NO3",
                    "unite" => "mg_L",
                ),
                array(
                    'id' => '5',
                    'parametre' => "NO2",
                    "unite" => "mg_L",
                ),
                
                array(
                    'id' => '6',
                    'parametre' => "NH4",
                    "unite" => "mg_L",
                ),
                array(
                    'id' => '7',
                    'parametre' => "Cl",
                    "unite" => "mg_L",
                ),
                array(
                    'id' => '8',
                    'parametre' => "SO4",
                    "unite" => "mg_L",
                ),
                array(
                    'id' => '9',
                    'parametre' => "P",
                    "unite" => "mg_L",
                ),
                array(
                    'id' => '10',
                    'parametre' => "K",
                    "unite" => "mg_L",
                ),
                array(
                    'id' => '11',
                    'parametre' => "Na",
                    "unite" => "mg_L",
                ),
                array(
                    'id' => '12',
                    'parametre' => "Ca",
                    "unite" => "mg_L",
                ),
                array(
                    'id' => '13',
                    'parametre' => "Mg",
                    "unite" => "mg_L",
                ),
                array(
                    'id' => '14',
                    'parametre' => "Zn_EDTA",
                    "unite" => "mg_L",
                ),
                array(
                    'id' => '15',
                    'parametre' => "Cu_EDTA",
                    "unite" => "mg_L",
                ),
                array(
                    'id' => '16',
                    'parametre' => "Mn_EDTA",
                    "unite" => "mg_L",
                ),
                array(
                    'id' => '17',
                    'parametre' => "Fe_EDTA",
                    "unite" => "mg_L",
                ),
                array(
                    'id' => '18',
                    'parametre' => "NT",
                    "unite" => "‰",
                ),
                array(
                    'id' => '19',
                    'parametre' => "C_O",
                    "unite" => "g_kg",
                ),
                array(
                    'id' => '20',
                    'parametre' => "HCO3",
                    "unite" => "mg_L",
                ),
                array(
                    'id' => '21',
                    'parametre' => "MS",
                    "unite" => "%",
                ),
                array(
                    'id' => '22',
                    'parametre' => "Bore",
                    "unite" => "mg_kg",
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
        Schema::dropIfExists('analyse_unite_eap');
    }
}
