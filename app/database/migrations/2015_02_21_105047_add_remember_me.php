<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRememberMe extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::drop('events');
        Schema::create('events', function(Blueprint $table)
        {
            $table->increments('id');
            $table->int('hostel_id');
            $table->int('month_id');
            $table->string('event_title');
            $table->string('event_sub_title');
            $table->string('event_text');
            $table->string('event_image');
            $table->timestamps();
        });

        Schema::create('months', function(Blueprint $table)
        {
            $table->increments('id');
            $table->int('month_id');
            $table->string('month');
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
        Schema::table('months', function(Blueprint $table)
        {
            Schema::drop('months');
        });
	}

}
