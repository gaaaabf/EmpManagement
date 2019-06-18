<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDapartmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dapartment', function(Blueprint $table)
		{
			$table->foreign('dapartment_id', 'dapartment_ibfk_1')->references('fk_departement_id')->on('dept_company')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dapartment', function(Blueprint $table)
		{
			$table->dropForeign('dapartment_ibfk_1');
		});
	}

}
