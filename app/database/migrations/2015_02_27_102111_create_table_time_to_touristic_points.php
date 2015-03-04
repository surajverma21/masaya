<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTimeToTouristicPoints extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('time_to_touristic_points',function(Blueprint $table){

            $table->increments('id');
            $table->integer('hostel_code');
            $table->integer('lang_code');
            $table->integer('time_on_point');
            $table->text('description');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	    Schema::drop('time_to_touristic_points');
	}

}