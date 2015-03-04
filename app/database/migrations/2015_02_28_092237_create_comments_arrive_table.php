<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsArriveTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments_arrive',function(Blueprint $table){

            $table->increments('id');
            $table->integer('hostel_id');
            $table->integer('lang_id');
            $table->string('title');
            $table->text('description')->nullable();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	    	Schema::drop('comments_arrive');
	}

}
