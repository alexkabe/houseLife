<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('factureUser', function(Blueprint $table) {
			$table->foreign('idUser')->references('id')->on('user')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('tache', function(Blueprint $table) {
			$table->foreign('idAppartement')->references('id')->on('appartement')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('poste', function(Blueprint $table) {
			$table->foreign('auteur')->references('id')->on('user')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user', function(Blueprint $table) {
			$table->foreign('idAppartement')->references('id')->on('appartement')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('factureGlobale', function(Blueprint $table) {
			$table->foreign('idAppartement')->references('id')->on('appartement')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('factureUser', function(Blueprint $table) {
			$table->dropForeign('factureUser_idUser_foreign');
		});
		Schema::table('tache', function(Blueprint $table) {
			$table->dropForeign('tache_idAppartement_foreign');
		});
		Schema::table('poste', function(Blueprint $table) {
			$table->dropForeign('poste_auteur_foreign');
		});
		Schema::table('user', function(Blueprint $table) {
			$table->dropForeign('user_idAppartement_foreign');
		});
		Schema::table('factureGlobale', function(Blueprint $table) {
			$table->dropForeign('factureGlobale_idAppartement_foreign');
		});

	}
}