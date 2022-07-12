<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePosteTable extends Migration {

	public function up()
	{
		Schema::create('poste', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('message');
			$table->string('auteur');
			$table->timestamp('dateDebut');
			$table->timestamp('dateFin');
			$table->integer('duree');
			$table->boolean('etat');
		});
	}

	public function down()
	{
		Schema::drop('poste');
	}
}