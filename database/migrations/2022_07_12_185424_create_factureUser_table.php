<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFactureUserTable extends Migration {

	public function up()
	{
		Schema::create('factureUser', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('mois');
			$table->string('type');
			$table->boolean('etat');
			$table->integer('montant');
			$table->integer('idUser')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('factureUser');
	}
}