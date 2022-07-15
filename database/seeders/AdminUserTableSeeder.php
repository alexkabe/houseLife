<?php
namespace Database\Seeders;
use App\Models\AdminUser;
use Illuminate\Database\Seeder;

class AdminUserTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('adminUser')->delete();

		// adminUser
		AdminUser::create(array(
				'idUser' => 1,
			));
	}
}
