<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTenantsTable extends Migration {

	public function up()
	{
		Schema::create('tenants', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('type');
			$table->integer('idUser')->unsigned();
			$table->integer('idAppartement')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('tenants');
	}
}