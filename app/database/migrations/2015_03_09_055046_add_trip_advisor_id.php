<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTripAdvisorId extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('hostels',function(Blueprint $table){

                $table->integer('trip_advisor_id')->nullable();
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

            $table->dropColumn('trip_advisor_id');
        });
	}

}
