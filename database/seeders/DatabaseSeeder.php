<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	public function run()
	{
		// Eloquent::unguard();
		$this->call(UserTableSeeder::class);
		$this->command->info('User table seeded!');
		
		$this->call(AdminUserTableSeeder::class);
		$this->command->info('AdminUser table seeded!');
		
		$this->call(AppartementTableSeeder::class);
		$this->command->info('Appartement table seeded!');
		
		$this->call(TenantsTableSeeder::class);
		$this->command->info('Tenants table seeded!');
		
		$this->call(FactureGlobaleTableSeeder::class);
		$this->command->info('FactureGlobale table seeded!');
		
		$this->call(TacheTableSeeder::class);
		$this->command->info('Tache table seeded!');

		$this->call(PosteTableSeeder::class);
		$this->command->info('Poste table seeded!');
		
		
		$this->call(FactureUserTableSeeder::class);
		$this->command->info('FactureUser table seeded!');
	}
}