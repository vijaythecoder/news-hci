<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('user_role', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_role', function(Blueprint $table) {
			$table->foreign('role_id')->references('id')->on('role')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('news', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('review', function(Blueprint $table) {
			$table->foreign('news_id')->references('id')->on('news')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('review', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('news_media', function(Blueprint $table) {
			$table->foreign('news_id')->references('id')->on('news')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('news_media', function(Blueprint $table) {
			$table->foreign('media_id')->references('id')->on('media')
						->onDelete('restrict')
						->onUpdate('restrict');
		});

		Schema::table('news', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('category')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('user_role', function(Blueprint $table) {
			$table->dropForeign('user_role_user_id_foreign');
		});
		Schema::table('user_role', function(Blueprint $table) {
			$table->dropForeign('user_role_role_id_foreign');
		});
		Schema::table('news', function(Blueprint $table) {
			$table->dropForeign('news_user_id_foreign');
		});
		Schema::table('review', function(Blueprint $table) {
			$table->dropForeign('review_news_id_foreign');
		});
		Schema::table('review', function(Blueprint $table) {
			$table->dropForeign('review_user_id_foreign');
		});
		Schema::table('news_media', function(Blueprint $table) {
			$table->dropForeign('news_media_news_id_foreign');
		});
		Schema::table('news_media', function(Blueprint $table) {
			$table->dropForeign('news_media_media_id_foreign');
		});
	}
}