<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddActivitysIdToRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('roles', function (Blueprint $table) {
            $table->json('activitys_id')->nullable();
        });
        DB::table('roles')->insert(

            array(
                array(
                    'id' => '1',
                    'role' => "super administrateur",
                    'activitys_id' => json_encode(['1','2','3','4','5','6']),
                ),
                array(
                    'id' => '2',
                    'role' => "administrateur",
                    'activitys_id' => json_encode(['1','2','3','4','5','6']),

                ),
                array(
                    'id' => '3',
                    'role' => "responsable",
                    'activitys_id' => json_encode(['1','2','3','4','5','6']),

                ),
                array(
                    'id' => '4',
                    'role' => "cordinateur",
                    'activitys_id' => json_encode(['1','2','3','4','5','6']),

                ),
                array(
                    'id' => '5',
                    'role' => "receptionniste",
                    'activitys_id' => json_encode(['1','2','3','4','5','6']),

                ),
                array(
                    'id' => '6',
                    'role' => "visiteur",
                    'activitys_id' => json_encode(['1','2','3','4','5','6']),

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
        Schema::table('roles', function (Blueprint $table) {
            $table->dropColumn('activitys_id');
        });
    }
}
