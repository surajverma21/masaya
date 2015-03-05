<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnDescriptionRoomPreview extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('hostel_room_preview',function(Blueprint $table){
                $table->dropColumn('description');
                $table->string('hostel_room_preview_image');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('room_preview',function(Blueprint $table){
            $table->text('description');
            $table->dropColumn('hostel_room_preview_image');
        });
	}

}
