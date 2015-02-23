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
		Schema::create('members', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('full_name');
            $table->string('username');
            $table->string('email');
            $table->string('contact_number');
            $table->string('password');
            $table->string('profile_picture');
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
		Schema::table('members', function(Blueprint $table)
		{
			Schema::drop('members');
		});
	}

}
