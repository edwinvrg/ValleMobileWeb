<?php

use ValleMovil\Entities\Image;
// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ImagesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        $images= [
        'https://unsplash.imgix.net/photo-1423114707015-13928e2179d5?fit=crop&fm=jpg&q=75&w=1050',
        'https://unsplash.imgix.net/photo-1422247073726-aa2d89bd8b8f?fit=crop&fm=jpg&q=75&w=1050',
        'https://ununsplash.imgix.net/photo-1422247018356-3e1d986d8a57?fit=crop&fm=jpg&q=75&w=1050',
        'https://ununsplash.imgix.net/photo-1422246719650-cb30d19825e3?fit=crop&fm=jpg&q=75&w=1050',
        'https://ununsplash.imgix.net/photo-1422246654994-34520d5a0340?fit=crop&fm=jpg&q=75&w=1050',
        'https://unsplash.imgix.net/photo-1422246478030-ac94dfdc1dae?fit=crop&fm=jpg&q=75&w=1050',
        'https://ununsplash.imgix.net/photo-1422246358533-95dcd3d48961?fit=crop&fm=jpg&h=700&q=75&w=1050',
        'https://ununsplash.imgix.net/photo-1422246255724-6ebbba232821?fit=crop&fm=jpg&h=700&q=75&w=1050',
        'https://ununsplash.imgix.net/photo-1422246023843-74de48d4c221?fit=crop&fm=jpg&h=700&q=75&w=1050',
        'https://ununsplash.imgix.net/photo-1417309807426-472e833fa5d0?fit=crop&fm=jpg&h=700&q=75&w=1050',
        'https://unsplash.imgix.net/photo-1417309608060-e6cf39c8a694?fit=crop&fm=jpg&h=700&q=75&w=1050',
        'https://unsplash.imgix.net/photo-1416970817415-68060fe24f35?fit=crop&fm=jpg&h=700&q=75&w=1050',
        'https://unsplash.imgix.net/photo-1416772472542-01fdd961f986?fit=crop&fm=jpg&h=700&q=75&w=1050',
        'https://ununsplash.imgix.net/photo-1414808575981-0f15adccd365?fit=crop&fm=jpg&h=600&q=75&w=1050',
        'https://ununsplash.imgix.net/photo-1414808549009-35951c724e9f?fit=crop&fm=jpg&h=700&q=75&w=1050',
        'https://unsplash.imgix.net/uploads/14136902205911bb2f95c/01146212?fit=crop&fm=jpg&h=700&q=75&w=1050',
        'https://unsplash.imgix.net/uploads/1413689858428493cc8ff/71eef144?fit=crop&fm=jpg&h=1575&q=75&w=1050',
        'https://unsplash.imgix.net/uploads/14136896573128c553e6f/86c48780?fit=crop&fm=jpg&h=700&q=75&w=1050',
        'https://unsplash.imgix.net/uploads/1412198532414025532c0/6a31309c?fit=crop&fm=jpg&h=750&q=75&w=1050',
        'https://unsplash.imgix.net/uploads/14121985124429dd8eeb5/60431f5b?fit=crop&fm=jpg&h=700&q=75&w=1050',
        'https://unsplash.imgix.net/uploads/1412198485051133af17f/5049dacb?fit=crop&fm=jpg&h=700&q=75&w=1050',
        'https://ununsplash.imgix.net/reserve/yra1GBrGTB65qtZpFaly_day%202.jpg?fit=crop&fm=jpg&h=700&q=75&w=1050'];

        $total = count($images) - 1;

		foreach(range(1, 120) as $index)
		{
            $select = rand(0, $total);
			Image::create([
                'url' => '"'.$images[$select].'"',
                'place_id' => $faker->numberBetween(0, 50)
			]);
		}
	}

}