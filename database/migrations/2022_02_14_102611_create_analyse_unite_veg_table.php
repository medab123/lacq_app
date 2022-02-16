<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalyseUniteVegTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analyse_unite_veg', function (Blueprint $table) {
            $table->id();
            $table->string("parametre")->nullable();
            $table->string("unite")->nullable();
            $table->timestamps();
        });

        DB::table('analyse_unite_veg')->insert(
            array(
                array(
                    'id' => '1',
                    'parametre' => "Humidité",
                    "unite" => "%",
                ),
                array(
                    'id' => '2',
                    'parametre' => "NTK",
                    "unite" => "%",
                ),
                array(
                    'id' => '3',
                    'parametre' => "PT",
                    "unite" => "%",
                ),
                array(
                    'id' => '4',
                    'parametre' => "K",
                    "unite" => "%",
                ),
                array(
                    'id' => '5',
                    'parametre' => "Na",
                    "unite" => "%",
                ),
                
                array(
                    'id' => '6',
                    'parametre' => "Ca",
                    "unite" => "%",
                ),
                array(
                    'id' => '7',
                    'parametre' => "Mg",
                    "unite" => "%",
                ),
                array(
                    'id' => '8',
                    'parametre' => "Zn",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '9',
                    'parametre' => "Cu",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '10',
                    'parametre' => "Mn",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '11',
                    'parametre' => "Fe",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '12',
                    'parametre' => "B",
                    "unite" => "mg_kg",
                ),
                array(
                    'id' => '13',
                    'parametre' => "Poids",
                    "unite" => "g",
                ),
                array(
                    'id' => '14',
                    'parametre' => "S",
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
        Schema::dropIfExists('analyse_unite_veg');
    }
}
