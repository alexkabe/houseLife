<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	public function up()
	{
		Schema::create('user', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom');
			$table->string('prenom');
			$table->integer('contact');
			$table->string('email')->nullable();
			$table->string('role');
			$table->integer('idAppartement')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('user');
	}
}