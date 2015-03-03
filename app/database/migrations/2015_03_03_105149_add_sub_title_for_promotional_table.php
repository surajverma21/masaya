<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSubTitleForPromotionalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('promotional_artists',function(Blueprint $table){

            $table->text('sub_title');
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

            $table->dropColumn('sub_title');
        });
	}

}
