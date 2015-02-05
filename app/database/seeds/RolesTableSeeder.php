<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use ValleMovil\Entities\Role;

class RolesTableSeeder extends Seeder {

	public function run()
	{

        Role::create([
            'name'=>'Administrador',
            'description'=>'Administrador del sistema'
        ]);

        Role::create([
            'name'=>'Editor',
            'description'=>'Editor de lugares'
        ]);
	}

}