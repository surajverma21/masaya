<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnLanguageCodeTouristicPoints extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('time_to_touristic_points',function(Blueprint $table){

                    $table->dropColumn('lang_code');
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
        Schema::table('time_to_touristic_points',function(Blueprint $table){

            $table->dropColumn('language_id');
            $table->integer('language_code');
        });
	}

}
