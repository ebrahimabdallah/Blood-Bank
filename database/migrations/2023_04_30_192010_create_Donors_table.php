<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDonorsTable extends Migration {

	public function up()
	{
		Schema::create('Donors', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 225);
			$table->string('phone', 20)->unique();
			$table->string('email', 225)->unique();
			$table->string('address', 225);
			$table->enum('BloodType', array('O', 'AB', 'A', 'B', 'A-', 'B-', 'AB-', 'O-'));
			$table->tinyInteger('age');
			$table->date('LastDontation');
			$table->date('CuurentTime');

		});
	}

	public function down()
	{
		Schema::drop('Donors');
	}
}