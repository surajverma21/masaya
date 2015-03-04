<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateHotelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('hostels',function(Blueprint $table){

            $table->string('address');
            $table->string('contact_number1');
            $table->string('contact_number2');
            $table->string('contact_number3');
            $table->string('email');
            $table->string('time_to_touristic_points');
            $table->string('travel_tip');
            $table->string('comments_arrival');
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

            $table->dropColumn('address');
            $table->dropColumn('contact_number1');
            $table->dropColumn('contact_number2');
            $table->dropColumn('contact_number3');
            $table->dropColumn('email');
            $table->dropColumn('time_to_touristic_points');
            $table->dropColumn('travel_tip');
            $table->dropColumn('comments_arrival');
        });
	}

}
