<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLabsTable extends Migration {

	public function up()
	{
		Schema::create('Labs', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('Name');
			$table->string('phone', 20)->unique();
			$table->string('address');
		});
	}

	public function down()
	{
		Schema::drop('Labs');
	}
}