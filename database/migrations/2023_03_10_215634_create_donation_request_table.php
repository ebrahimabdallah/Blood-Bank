<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDonationRequestTable extends Migration {

	public function up()
	{
		Schema::create('donation_request', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('patient_name');
			$table->string('patients_phone')->unique();
			$table->string('hospital_name');
			$table->enum('bloode_type', array('O', 'AB', 'A', 'B', 'A-', 'B-', 'AB-', 'O-'));
			$table->integer('patient_age');
			$table->integer('bages_num');
			$table->integer('The_cost_of_the_operation');
			$table->string('address');
			//The cost of the operation
		});
	}

	public function down()
	{
		Schema::drop('donation_request');
	}
}