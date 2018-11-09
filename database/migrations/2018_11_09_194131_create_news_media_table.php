<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsMediaTable extends Migration {

	public function up()
	{
		Schema::create('news_media', function(Blueprint $table) {
			$table->integer('news_id')->unsigned();
			$table->integer('media_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('news_media');
	}
}