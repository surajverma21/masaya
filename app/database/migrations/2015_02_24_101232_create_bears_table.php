<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBearsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('events', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('hostel_id');

            $table->string('title1');
            $table->string('sub_title1');
            $table->string('text1');

            $table->string('title2');
            $table->string('title2');
            $table->string('title2');

            $table->string('title3');
            $table->string('title3');
            $table->string('title3');

            $table->string('title4');
            $table->string('title4');
            $table->string('title4');

            $table->string('title5');
            $table->string('title5');
            $table->string('title5');

            $table->string('title6');
            $table->string('title6');
            $table->string('title6');

            $table->string('title7');
            $table->string('title7');
            $table->string('title7');

            $table->string('title8');
            $table->string('title8');
            $table->string('title8');


            $table->string('title9');
            $table->string('title9');
            $table->string('title9');
            $table->string('title10');
            $table->string('title11');
            $table->string('title12');

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
		Schema::table('events', function(Blueprint $table)
		{
            Schema::drop('events');
		});
	}

}
