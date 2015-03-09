<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHostelIdEventInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('hotel_event_activities_info',function(Blueprint $table){
                $table->integer('hostel_id');
                $table->integer('language_id');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('hotel_event_activities_info',function(Blueprint $table){
            $table->dropColumn('hostel_id');
            $table->dropColumn('language_id');
        });
	}

}
