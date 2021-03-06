<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEmployeeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('employee', function(Blueprint $table)
		{
			$table->foreign('fk_company_id', 'employee_ibfk_1')->references('company_id')->on('company')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fk_user_id', 'employee_ibfk_2')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('employee', function(Blueprint $table)
		{
			$table->dropForeign('employee_ibfk_1');
			$table->dropForeign('employee_ibfk_2');
		});
	}

}
