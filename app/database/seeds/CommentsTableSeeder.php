<?php

use ValleMovil\Entities\Comment;
// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CommentsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		foreach(range(1, 200) as $index)
		{
            Comment::create([
                'user' => $faker->name,
                'comment' => $faker->text(250),
                'place_id' => $faker->numberBetween(1, 50),
			]);
		}
	}

}