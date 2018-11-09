<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMediaTable extends Migration {

	public function up()
	{
		Schema::create('media', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 100);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('media');
	}
}