<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use ValleMovil\Entities\User;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{

        User::create([
            'username' => 'angelkurten',
            'password'=>'ana6chiu',
            'email' => 'yo@angelkurten.com',
            'rol_id'=>1,
            'state'=>1
        ]);
	}

}