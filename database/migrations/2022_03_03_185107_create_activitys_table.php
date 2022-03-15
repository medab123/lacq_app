<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activitys', function (Blueprint $table) {
            $table->id();
            $table->string("activity");
            $table->string("name");
            $table->timestamps();
        });
        DB::table('activitys')->insert(
            array(
                array(
                    'id' => '1',
                    'activity' => 'userController@index',
                    'name' => 'index of users'
                ),
                array(
                    'id' => '2',
                    'activity' => 'userController@create',
                    'name' => 'page de creation des utilisateurs'
                ),
                array(
                    'id' => '3',
                    'activity' => 'userController@create',
                    'name' => 'page de creation des utilisateurs'
                ),
                array(
                    'id' => '4',
                    'activity' => 'userController@edit',
                    'name' => 'page de edition des utilisateurs'
                ),
                array(
                    'id' => '5',
                    'activity' => 'userController@update',
                    'name' => 'utilisateur modifier'
                ),
                array(
                    'id' => '6',
                    'activity' => 'userController@destroy',
                    'name' => 'remove utilisateurs'
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
        Schema::dropIfExists('activitys');
    }
}
