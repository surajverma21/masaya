<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameLanguageId extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('city_guide',function(Blueprint $table){

            $table->dropColumn('lang_id');
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
        Schema::table('city_guide',function(Blueprint $table){

            $table->dropColumn('language_id');
            $table->integer('lang_id');
	    });
    }

}
