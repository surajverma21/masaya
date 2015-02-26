<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('activities', function(Blueprint $table)
		{
            $table->increments('id');
            $table->integer('hostel_id');
            $table->integer('month_id');
            $table->string('event_title');
            $table->string('event_sub_title');
            $table->string('event_text');
            $table->string('event_image');
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
		Schema::table('activities', function(Blueprint $table)
		{
			//
		});
	}

}
