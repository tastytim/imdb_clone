<?php

use Illuminate\Database\Seeder;
use App\Movie;
use App\Genre;

class MoviesGenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = Movie::all();
        $genres = Genre::all();
        $genresIds = [];

        foreach ($genres as $genre) {
            $genresIds[] = $genre->id;
        }
        foreach ($movies as $movie) {
            $mixArray = $genresIds;
            shuffle($mixArray);
            $sliceArray = array_slice($mixArray, 0 , rand(2, count($genresIds)));
            $movie->genres()->attach($sliceArray);
        }
    }
}
