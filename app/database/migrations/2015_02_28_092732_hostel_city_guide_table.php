<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HostelCityGuideTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('city_guide',function(Blueprint $table){

            $table->increments('id');
            $table->integer('hostel_id');
            $table->integer('lang_id');
            $table->string('city_guide_text');
            $table->string('city_guide_image');
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
		Schema::drop('city_guide');
	}

}
