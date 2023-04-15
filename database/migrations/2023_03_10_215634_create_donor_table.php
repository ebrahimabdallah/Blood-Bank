<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDonorTable extends Migration {

	public function up()
	{
		Schema::create('donor', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name')->nullable();
			$table->string('phone')->unique()->nullable();
			$table->string('password');
			$table->date('Birth_data');
			$table->enum('blood', array('O', 'AB', 'A', 'B', 'A-', 'B-', 'AB-', 'O-'));
			$table->integer('pin_code');
			$table->string('email');
			$table->integer('city_id');
		});
	}

	public function down()
	{
		Schema::drop('donor');
	}
}