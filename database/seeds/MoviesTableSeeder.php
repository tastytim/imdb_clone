<?php

use App\Movie;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10;$i++){
          $newMovie = new Movie();
          $newMovie->title = $faker->word();
          $newMovie->description = $faker->paragraph();
          $newMovie->year = intval($faker->year());
          $newMovie->poster = $faker->imageUrl(640, 480, 'movies', true);
          $newMovie->duration = $faker->dateTime();
          $newMovie->trailer_url= $faker->imageUrl(640, 480, 'animals', true);
          $newMovie->pegi_id = 0;
          $newMovie->save();
        }
    }
}
