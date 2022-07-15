<?php

namespace Database\Seeders;
use App\Models\Appartement;
use Illuminate\Database\Seeder;

class AppartementTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('appartement')->delete();

		// appartement
		Appartement::create(array(
				'nom' => "Appartement 4 etoile",
				'montant' => 250000,
				'etatSuppression' => false,
				'idAdmin' => 1
			));
	}
}