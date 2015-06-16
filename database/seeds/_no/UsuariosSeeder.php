<?php

class UsuariosSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        User::create(array(
            'username' => 'andres',
            'email' => 'andres@gmail.com',
            'firstname' => 'Andres',
            'lastname' => 'Gutierrez',
            'password' => Hash::make('andres')
        ));

        User::create(array(
            'username' => 'juanes',
            'email' => 'juanes@aol.com',
            'firstname' => 'Juanes',
            'lastname' => 'Perozo',
            'password' => Hash::make('juanes')
        ));
    }
}