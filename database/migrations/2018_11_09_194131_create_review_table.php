<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReviewTable extends Migration {

	public function up()
	{
		Schema::create('review', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 50);
			$table->text('description');
			$table->integer('news_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->integer('rating');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('review');
	}
}