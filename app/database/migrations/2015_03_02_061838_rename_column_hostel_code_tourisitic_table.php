<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnHostelCodeTourisiticTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('time_to_touristic_points',function(Blueprint $table){
                $table->dropColumn('hostel_code');
                $table->integer('hostel_id');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('time_to_touristic_points',function(Blueprint $table){
                $table->dropColumn('hostel_id');
                $table->integer('hostel_code');
        });
	}

}
