<?php
namespace Database\Seeders;

use App\Models\FactureGlobale;
use Illuminate\Database\Seeder;

class FactureGlobaleTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('factureGlobale')->delete();

		// factureGlobale
		FactureGlobale::create(array(
				'mois' => 'janvier',
				'etatFacture' => false,
				'etatElectricite' => false,
				'etatEau' => false,
				'etatWifi' => false,
				'montantEau' => 5000,
				'montantElectricite' => 8000,
				'montantWifi' => 30000,
				'montantFacture' => 43000,
				'idAppartement' => 1
			));
	}
}