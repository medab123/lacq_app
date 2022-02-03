<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalyseUniteAmeoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analyse_unite_ameo', function (Blueprint $table) {
            $table->id();
            $table->string("parametre")->nullable();
            $table->string("unite")->nullable();
            $table->timestamps();
        });

        DB::table('analyse_unite_ameo')->insert(
            array(
                array(
                    'id' => '1',
                    'parametre' => "MS",
                    "unite" => "%",
                ),
                array(
                    'id' => '2',
                    'parametre' => "PH",
                    "unite" => "Unite_pH",
                ),
                array(
                    'id' => '3',
                    'parametre' => "EC",
                    "unite" => "mS_Cm",
                ),
                array(
                    'id' => '4',
                    'parametre' => "NTK",
                    "unite" => "%",
                ),
                array(
                    'id' => '5',
                    'parametre' => "PT",
                    "unite" => "%",
                ),
                
                array(
                    'id' => '6',
                    'parametre' => "K",
                    "unite" => "%",
                ),
                array(
                    'id' => '7',
                    'parametre' => "Na",
                    "unite" => "%",
                ),
                array(
                    'id' => '8',
                    'parametre' => "Ca",
                    "unite" => "%",
                ),
                array(
                    'id' => '9',
                    'parametre' => "Mg",
                    "unite" => "%",
                ),
                array(
                    'id' => '10',
                    'parametre' => "M_O",
                    "unite" => "%",
                ),
                array(
                    'id' => '11',
                    'parametre' => "Zn",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '12',
                    'parametre' => "Cu",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '13',
                    'parametre' => "Mn",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '14',
                    'parametre' => "Fe",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '15',
                    'parametre' => "B",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '16',
                    'parametre' => "Cl",
                    "unite" => "%",
                ),
                array(
                    'id' => '17',
                    'parametre' => "MN_NH4",
                    "unite" => "g_kg",
                ),
                array(
                    'id' => '18',
                    'parametre' => "N_NO3",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '19',
                    'parametre' => "As",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '20',
                    'parametre' => "Cd",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '21',
                    'parametre' => "Co",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '22',
                    'parametre' => "Cr",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '23',
                    'parametre' => "Hg",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '24',
                    'parametre' => "Mo",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '25',
                    'parametre' => "Ni",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '26',
                    'parametre' => "Pb",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '27',
                    'parametre' => "Se",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '28',
                    'parametre' => "M_V",
                    "unite" => "G_L",
                ),
                array(
                    'id' => '29',
                    'parametre' => "Refus",
                    "unite" => "%",
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
        Schema::dropIfExists('analyse_unite_ameo');
    }
}
