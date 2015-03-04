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
		Schema::create('hostels',function(Blueprint $table){

                $table->increments('id');
                $table->string('name');
                $table->string('image');
                $table->string('email');
                $table->string('contact_number1');
                $table->string('contact_number2');
                $table->string('contact_number3');
                $table->string('address');
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
