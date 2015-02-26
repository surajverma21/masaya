<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterationInEventTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('events', function(Blueprint $table)
		{
            $table->dropColumn('event_legend');
            $table->dropColumn('event_medium');

            $table->string('event_legend_img')->nullable()->change();
            $table->string('event_medium_img')->nullable()->change();
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
            $table->string('event_legend_img');
            $table->string('event_medium_img');
		});
	}

}
