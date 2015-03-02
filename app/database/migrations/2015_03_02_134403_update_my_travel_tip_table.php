<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMyTravelTipTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('travel_tip',function(Blueprint $table){
                $table->removeColumn('lang_id');
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
        Schema::table('travel_tip',function(Blueprint $table){
            $table->removeColumn('language_id');
            $table->integer('lang_id');
        });
	}

}
