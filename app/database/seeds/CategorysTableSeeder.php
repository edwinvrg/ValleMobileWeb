<?php

use ValleMovil\Entities\Category;
// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategorysTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		foreach(range(1, 8) as $index)
		{
            Category::create([
                'name' => $faker->name,
                'description' => $faker->text(150),
			]);
		}
	}

}