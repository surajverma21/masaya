<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropLangIdHostelPreview extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('hostel_room_preview',function(Blueprint $table){

            $table->dropColumn('lang_id');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('hostel_room_preview',function(Blueprint $table){

            $table->integer('lang_id');
        });
	}

}
