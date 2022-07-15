<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('appartement', function(Blueprint $table) {
			$table->foreign('idAdmin')->references('id')->on('adminUser')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('factureGlobale', function(Blueprint $table) {
			$table->foreign('idAppartement')->references('id')->on('appartement')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('factureUser', function(Blueprint $table) {
			$table->foreign('idUser')->references('id')->on('tenants')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('tache', function(Blueprint $table) {
			$table->foreign('idAppartement')->references('id')->on('appartement')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('poste', function(Blueprint $table) {
			$table->foreign('auteur')->references('id')->on('tenants')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('tenants', function(Blueprint $table) {
			$table->foreign('idAppartement')->references('id')->on('appartement')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('appartement', function(Blueprint $table) {
			$table->dropForeign('appartement_idAdmin_foreign');
		});
		Schema::table('factureGlobale', function(Blueprint $table) {
			$table->dropForeign('factureGlobale_idAppartement_foreign');
		});
		Schema::table('factureUser', function(Blueprint $table) {
			$table->dropForeign('factureUser_idUser_foreign');
		});
		Schema::table('tache', function(Blueprint $table) {
			$table->dropForeign('tache_idAppartement_foreign');
		});
		Schema::table('poste', function(Blueprint $table) {
			$table->dropForeign('poste_auteur_foreign');
		});
		Schema::table('tenants', function(Blueprint $table) {
			$table->dropForeign('tenants_idAppartement_foreign');
		});
	}
}