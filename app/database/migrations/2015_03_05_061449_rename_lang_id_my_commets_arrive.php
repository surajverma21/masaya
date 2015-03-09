<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameLangIdMyCommetsArrive extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comments_arrive',function(Blueprint $table){
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
        Schema::table('comments_arrive',function(Blueprint $table){
            $table->integer('lang_id');
            $table->dropColumn('language_id');
        });
	}

}
