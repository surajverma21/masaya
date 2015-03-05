<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateColumnNamePromotionalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('promotional_artists',function(Blueprint $table){

                $table->drop('lang_id');
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
        Schema::table('promotional_artists',function(Blueprint $table){

            $table->drop('language_id');
            $table->integer('lang_id');
        });
	}

}
