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
// creo array e inserisco tutti id
        foreach ($genres as $genre) {
            $genresIds[] = $genre->id;
        }

        // prendo ogni film
        foreach ($movies as $movie) {

            $mixArray = $genresIds;
            shuffle($mixArray);
            $sliceArray = array_slice($mixArray, 0 , rand(1, 3));
            $movie->genres()->attach($sliceArray);
        }
    }
}
