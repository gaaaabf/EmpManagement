<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDeptCompanyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dept_company', function(Blueprint $table)
		{
			$table->integer('dept_company_id', true);
			$table->integer('fk_departement_id')->index('fk_department_id');
			$table->integer('fk_company_id')->index('fk_company_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dept_company');
	}

}
