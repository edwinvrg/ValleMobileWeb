<?php

use ValleMovil\Entities\Place;
use ValleMovil\Entities\Category;
// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PlacesTableSeeder extends Seeder {
	public function run()
	{
		$faker = Faker::create();
        $company = new \Faker\Provider\en_US\Company($faker);
		foreach(range(1, 50) as $index)
		{
            $place = Place::create([
                'id' => $index,
                'name' => $company->company(),
                'description' => $company->catchPhrase(),
                'direction' => $faker->address,
                'longitude' => $faker->longitude,
                'latitude' => $faker->latitude,
                'points' => $faker->numberBetween(0, 100)
			]);

            $number = $faker->numberBetween(1, 8);
            $category = Category::find($number);
            $place->categorys()->save($category);
		}
	}

}