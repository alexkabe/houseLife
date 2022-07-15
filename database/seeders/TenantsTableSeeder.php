<?php
namespace Database\Seeders;
use App\Models\Tenants;
use Illuminate\Database\Seeder;

class TenantsTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('tenants')->delete();

		// tenants
		Tenants::create(array(
				'type' => 'tenantManager',
				'idUser' => 1,
				'idAppartement' => 1
			));
	}
}