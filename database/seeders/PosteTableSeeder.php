<?php
namespace Database\Seeders;
use App\Models\Poste;
use Illuminate\Database\Seeder;

class PosteTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('poste')->delete();

		// poste
		Poste::create(array(
				'message' => 'Salut les amis',
				'auteur' => 1,
				'dateDebut' => now(),
				'dateFin' => now(),
				'duree' => 5,
				'etat' => false
			));
	}
}