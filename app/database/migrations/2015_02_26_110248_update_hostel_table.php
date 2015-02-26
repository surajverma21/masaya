<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateHostelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('hostels',function(Blueprint $table){

            $table->string('promotional_artist_text');
            $table->string('promotional_artist_image');
            $table->string('city_guide_image');
            $table->string('excursion_image');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('hostels',function(Blueprint $table){
            $table->dropClolumn('promotional_artist_text');
            $table->dropClolumn('promotional_artist_image');
            $table->dropClolumn('city_guide_image');
            $table->dropClolumn('excursion_image');
        });
	}

}
