<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDeptCompanyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dept_company', function(Blueprint $table)
		{
			$table->foreign('fk_company_id', 'dept_company_ibfk_1')->references('company_id')->on('company')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dept_company', function(Blueprint $table)
		{
			$table->dropForeign('dept_company_ibfk_1');
		});
	}

}
