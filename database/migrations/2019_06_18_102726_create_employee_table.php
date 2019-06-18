<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employee', function(Blueprint $table)
		{
			$table->integer('employee_id', true);
			$table->integer('fk_user_id')->index('id');
			$table->integer('fk_company_id')->index('fk_company_id');
			$table->integer('address');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('employee');
	}

}
