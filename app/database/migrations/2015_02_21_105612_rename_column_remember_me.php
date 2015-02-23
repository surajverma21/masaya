<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnRememberMe extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('members', function(Blueprint $table)
        {
            $table->dropColumn('remember_me');
            $table->string('remember_token');
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
            $table->dropColumn('remember_token');
            $table->string('remember_me');
        });
	}

}
