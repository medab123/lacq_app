<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalyseUniteSolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analyse_unite_sol', function (Blueprint $table) {
            $table->id();
            $table->string("parametre")->nullable();
            $table->string("unite")->nullable();
            $table->timestamps();
        });

        DB::table('analyse_unite_sol')->insert(
            array(
                array(
                    'id' => '1',
                    'parametre' => "CT",
                    "unite" => "%",
                ), 
                array(
                    'id' => '2',
                    'parametre' => "CA",
                    "unite" => "%",
                ),
                array(
                    'id' => '3',
                    'parametre' => "PH",
                    "unite" => "Unite_pH",
                ),
                array(
                    'id' => '4',
                    'parametre' => "EC",
                    "unite" => "mS_Cm",
                ),
                array(
                    'id' => '5',
                    'parametre' => "Cl",
                    "unite" => "mg_kg",
                ),
                
                array(
                    'id' => '6',
                    'parametre' => "P2O5",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '7',
                    'parametre' => "K2O",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '8',
                    'parametre' => "Na2O",
                    "unite" => "g_kg",
                ),
                array(
                    'id' => '9',
                    'parametre' => "CaO",
                    "unite" => "g_kg",
                ),
                array(
                    'id' => '10',
                    'parametre' => "MgO",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '11',
                    'parametre' => "Zn_EDTA",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '12',
                    'parametre' => "Cu_EDTA",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '13',
                    'parametre' => "Mn_EDTA",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '14',
                    'parametre' => "Fe_EDTA",
                    "unite" => "mg_L",
                ),
                array(
                    'id' => '15',
                    'parametre' => "NT",
                    "unite" => "‰",
                ),
                array(
                    'id' => '16',
                    'parametre' => "C_O",
                    "unite" => "g_kg",
                ),
                array(
                    'id' => '17',
                    'parametre' => "CEC",
                    "unite" => "Cmol_kg",
                ),
                array(
                    'id' => '18',
                    'parametre' => "pH_KCI",
                    "unite" => "Unité_PH",
                ),
                array(
                    'id' => '19',
                    'parametre' => "N_NO3",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '20',
                    'parametre' => "N_NH4",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '21',
                    'parametre' => "Humidité",
                    "unite" => "%",
                ),
                array(
                    'id' => '22',
                    'parametre' => "Agrile",
                    "unite" => "‰",
                ),
                array(
                    'id' => '23',
                    'parametre' => "Limon",
                    "unite" => "‰",
                ),
                array(
                    'id' => '24',
                    'parametre' => "Sable",
                    "unite" => "‰",
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
        Schema::dropIfExists('analyse_unite_sol');
    }
}
