<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAppartementTable extends Migration {

	public function up()
	{
		Schema::create('appartement', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom');
			$table->integer('montant')->default('0');
			$table->boolean('etatSuppression');
		});
	}

	public function down()
	{
		Schema::drop('appartement');
	}
}