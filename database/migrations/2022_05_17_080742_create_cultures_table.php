<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCulturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cultures', function (Blueprint $table) {
            $table->id();
            $table->string('prametre');

            $table->float('abricotier_min');
            $table->float('abricotier_max');

            $table->float('argumes_min');
            $table->float('argumes_max');

            $table->float('amandier_min');
            $table->float('amandier_max');

            $table->float('avocatier_min');
            $table->float('avocatier_max');

            $table->float('cerisier_min');
            $table->float('cerisier_max');

            $table->float('clementinier_min');
            $table->float('clementinier_max');

            $table->float('figuier_min');
            $table->float('figuier_max');
            
            $table->float('fraisier_min');
            $table->float('fraisier_max');

            $table->float('haricot_min');
            $table->float('haricot_max');            


            $table->float('Kiwi_min');
            $table->float('Kiwi_max');

            
           


            $table->float('mais_min');
            $table->float('mais_max');

            $table->float('nectarine_min');
            $table->float('nectarine_max');

            $table->float('olivier_min');
            $table->float('olivier_max');

            $table->float('pecher_min');
            $table->float('pecher_max');

           

            $table->float('poirier_min');
            $table->float('poirier_max');

            $table->float('poivron_min');
            $table->float('poivron_max');

            $table->float('pomme_terre_min');
            $table->float('pomme_terre_max');

            $table->float('pommier_min');
            $table->float('pommier_max');

            $table->float('tomates_min');
            $table->float('tomates_max');

            $table->float('raisin_cuve_min');
            $table->float('raisin_cuve_max');

            $table->float('raisnin_table_limbes_min');
            $table->float('raisnin_table_limbes_max');



            $table->float('raisnin_table_Petioles_min');
            $table->float('raisnin_table_Petioles_max');

            $table->float('raisnin_table_feuille_min');
            $table->float('raisnin_table_feuille_max');

            $table->float('kaki_min');
            $table->float('kaki_max');

            $table->float('bananier_min');
            $table->float('bananier_max');

            $table->float('murier_min');
            $table->float('murier_max');

            $table->float('melon_min');
            $table->float('melon_max');

            $table->float('nectarinier_min');
            $table->float('nectarinier_max');

            $table->float('vigne_min');
            $table->float('vigne_max');

            $table->float('ble_min');
            $table->float('ble_max');

            $table->float('prunier_min');
            $table->float('prunier_max');

            $table->float('prunier_minvvvvvvvvv');
            $table->float('citronier_max');

            $table->float('framboise_min');
            $table->float('framboise_max');

            $table->float('piment_min');
            $table->float('piment_max');

            $table->float('courgette_min');
            $table->float('courgette_max');

            $table->float('grenadier_min');
            $table->float('grenadier_max');

            $table->float('palmier_dattier_min');
            $table->float('palmier_dattier_max');

            $table->float('betterave_min');
            $table->float('betterave_max');

            $table->float('myrtille_min');
            $table->float('myrtille_max');

            $table->float('concombre_min');
            $table->float('concombre_max');

            $table->float('papaye_min');
            $table->float('papaye_max');

            $table->float('areca_min');
            $table->float('areca_max');

            $table->float('chamaedorea_min');
            $table->float('chamaedorea_max');

            $table->float('alocasia_min');
            $table->float('alocasia_max');

            $table->float('arbo_min');
            $table->float('arbo_max');

           


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
        Schema::dropIfExists('cultures');
    }
}
