<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genreList = ['', '','','',''];


        
            foreach($genreList as $genre){
                $newGenre = new Genre();
                $newGenre->name = $genre;
                $newGenre->save();
            }
    }
}
