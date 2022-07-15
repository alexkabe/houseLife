<?php
namespace Database\Seeders;
use App\Models\FactureUser;
use Illuminate\Database\Seeder;

class FactureUserTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('factureUser')->delete();

		// factureUser
		FactureUser::create(array(
				'mois' => 'janvier',
				'type' => 'eau',
				'etat' => false,
				'montant' => 3000,
				'idUser' => 1
			));
	}
}