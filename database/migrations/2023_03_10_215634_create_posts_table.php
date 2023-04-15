<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	public function up()
	{
		Schema::create('posts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('image');
			$table->string('title');
			$table->date('created');
			$table->text('content');
			$table->boolean('react');

		});
	}

	public function down()
	{
		Schema::drop('posts');
	}
}