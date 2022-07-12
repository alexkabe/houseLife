<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTacheTable extends Migration {

	public function up()
	{
		Schema::create('tache', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom');
			$table->string('type');
			$table->integer('dureeAlternance');
			$table->smallInteger('nombreParticipant');
			$table->integer('idAppartement')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('tache');
	}
}