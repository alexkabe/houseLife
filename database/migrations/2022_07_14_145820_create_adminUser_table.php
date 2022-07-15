<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminUserTable extends Migration {

	public function up()
	{
		Schema::create('adminUser', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('idUser');
		});
	}

	public function down()
	{
		Schema::drop('adminUser');
	}
}