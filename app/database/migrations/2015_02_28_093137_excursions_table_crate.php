<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExcursionsTableCrate extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hostel_excursions',function(Blueprint $table){

                $table->increments('id');
                $table->integer('hostel_id');
                $table->integer('lang_id');
                $table->string('excursion_text');
                $table->string('excursion_image');
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
		Schema::drop('hostel_excursions');
	}

}
