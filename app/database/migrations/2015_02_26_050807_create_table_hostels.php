<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHostels extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hostels', function(Blueprint $table)
		{
		    $table->increments('id');
            $table->char('name');
            $table->char('description');
            $table->char('image');
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
		Schema::table('hostels', function(Blueprint $table)
		{
            Schema::drop('hostels');
		});
	}

}
