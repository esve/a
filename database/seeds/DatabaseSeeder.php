<?php

use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */

    //protected $table = 'usuarios';

    public function run()
	{
        Eloquent::unguard();

		// $this->call('UserTableSeeder');

        User::create(array(
            'username' => 'andres',
            'email' => 'andres@gmail.com',
            'firstname' => 'Andres',
            'lastname' => 'Gutierrez',
            'password' => Hash::make('andres')
        ));
    }
}