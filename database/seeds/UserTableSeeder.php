<?php 

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

	public function run()
	{
		\DB::table('usuarios')->insert(array(
			'nombres' 	=> 'Elias',
			'email' => 'elias@elias.cl',
			'password' => \Hash::make('123')
		));
	}
}