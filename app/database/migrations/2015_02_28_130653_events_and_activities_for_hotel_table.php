<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventsAndActivitiesForHotelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hotel_event_activities_info',function(Blueprint $table){

                $table->increments('id');
                $table->string('title');
                $table->text('description')->nullable();
                $table->string('extra_info')->nullable();
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
		    Schema::drop('hotel_event_activities_info');
	}

}
