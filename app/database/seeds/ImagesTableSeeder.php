<?php

use ValleMovil\Entities\Image;
// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ImagesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        $images= [
        'https://unsplash.imgix.net/photo-1423114707015-13928e2179d5',
        'https://unsplash.imgix.net/photo-1422247073726-aa2d89bd8b8f',
        'https://ununsplash.imgix.net/photo-1422247018356-3e1d986d8a57',
        'https://ununsplash.imgix.net/photo-1422246719650-cb30d19825e3',
        'https://ununsplash.imgix.net/photo-1422246654994-34520d5a0340',
        'https://unsplash.imgix.net/photo-1422246478030-ac94dfdc1dae',
        'https://ununsplash.imgix.net/photo-1422246358533-95dcd3d48961',
        'https://ununsplash.imgix.net/photo-1422246255724-6ebbba232821',
        'https://ununsplash.imgix.net/photo-1422246023843-74de48d4c221',
        'https://ununsplash.imgix.net/photo-1417309807426-472e833fa5d0',
        'https://unsplash.imgix.net/photo-1417309608060-e6cf39c8a694',
        'https://unsplash.imgix.net/photo-1416970817415-68060fe24f35',
        'https://unsplash.imgix.net/photo-1416772472542-01fdd961f986',
        'https://ununsplash.imgix.net/photo-1414808575981-0f15adccd365',
        'https://ununsplash.imgix.net/photo-1414808549009-35951c724e9f',
        'https://unsplash.imgix.net/uploads/14136902205911bb2f95c/01146212',
        'https://unsplash.imgix.net/uploads/1413689858428493cc8ff/71eef144',
        'https://unsplash.imgix.net/uploads/14136896573128c553e6f/86c48780',
        'https://unsplash.imgix.net/uploads/1412198532414025532c0/6a31309c',
        'https://unsplash.imgix.net/uploads/14121985124429dd8eeb5/60431f5b',
        'https://unsplash.imgix.net/uploads/1412198485051133af17f/5049dacb',
        'https://ununsplash.imgix.net/reserve/yra1GBrGTB65qtZpFaly_day%202.jpg'];

        $total = count($images) - 1;

		foreach(range(1, 120) as $index)
		{
            $select = rand(0, $total);
			Image::create([
                'url' => $images[$select],
                'place_id' => $faker->numberBetween(0, 49)
			]);
		}
	}

}