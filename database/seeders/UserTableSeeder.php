<?php
namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('user')->delete();

		// user
		User::create(array(
				'name'=>'Alex kabe kabe',
				'nom' => 'Alex',
				'prenom' => 'Kabe',
				'contact' => 83643473,
				'email' => 'alexkabedkabe@gmail.com',
				'password' => 'alexkabekabe'
			));
	}
}