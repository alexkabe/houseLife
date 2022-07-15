<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFactureGlobaleTable extends Migration {

	public function up()
	{
		Schema::create('factureGlobale', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('mois');
			$table->boolean('etatFacture');
			$table->boolean('etatElectricite');
			$table->boolean('etatEau');
			$table->boolean('etatWifi');
			$table->integer('montantEau');
			$table->integer('montantElectricite');
			$table->integer('montantWifi');
			$table->integer('montantFacture');
			$table->integer('idAppartement')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('factureGlobale');
	}
}