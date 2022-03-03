<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->timestamps();
        });
        DB::table('roles')->insert(
            array(
                array(
                    'id' => '1',
                    'role' => "super administrateur"
                ),
                array(
                    'id' => '2',
                    'role' => "administrateur"
                ),
                array(
                    'id' => '3',
                    'role' => "responsable"
                ),
                array(
                    'id' => '4',
                    'role' => "cordinateur"
                ),
                array(
                    'id' => '5',
                    'role' => "receptionniste"
                ),
                array(
                    'id' => '6',
                    'role' => "visiteur"
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
        Schema::dropIfExists('roles');
    }
}
