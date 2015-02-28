<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRoomPreview extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hostel_room_preview',function(Blueprint $table){

                $table->increments('id');
                $table->integer('hostel_id');
                $table->integer('lang_id');
                $table->string('description');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	        Schema::drop('hostel_description');
	}

}
