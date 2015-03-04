<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateColumnNameExcursionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('hostel_excursions',function(Blueprint $table){

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
        Schema::table('hostel_excursions',function(Blueprint $table){


            $table->dropColumn('language_id');
            $table->integer('lang_id');

        });
	}

}
