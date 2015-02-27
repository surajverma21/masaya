<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropTttCloumn extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('hostels',function(Blueprint $table){

            $table->dropColumn('time_to_touristic_points');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('hostels',function(Blueprint $table){

            $table->string('time_to_touristic_points');

        });
	}

}
