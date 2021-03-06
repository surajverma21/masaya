<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePromotionalArtists extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('promotional_artists',function(Blueprint $table){

                $table->increments('id');
                $table->integer('hostel_id');
                $table->integer('lang_id');
                $table->string('promotional_artist_text');
                $table->string('promotional_artist_image');
                $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
