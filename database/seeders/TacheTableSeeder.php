<?php
namespace Database\Seeders;
use App\Models\Tache;
use Illuminate\Database\Seeder;

class TacheTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('tache')->delete();

		// tache
		Tache::create(array(
				'nom' => 'menage',
				'type' => 'hebdomadaire',
				'dureeAlternance' => 1,
				'nombreParticipant' => 5,
				'idAppartement' => 1
			));
	}
}