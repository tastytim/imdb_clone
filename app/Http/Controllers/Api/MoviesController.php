<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Movie;
use Illuminate\Database\Eloquent\Builder;

use function Psy\debug;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //  MI ARRIVANO I PARAMETRI
        $filters = $request->query();

        $movies = Movie::with('genres');
        // FLORIAN AVEVA FATTO VEDERE ESEMPIO PASSANDO I DATI 
        //CON REQUEST::QUERY NEL FILE BLADE USANDO FORM CON METODO POST
        // QUI INVECE MI ARRIVANO I PARAMETRI DALLA AXIOS DA VUE E SICCOME MI ARRIVA ANCHE PARAMETRO PAGE
        // LO ELIMINO COSI NON MI DA ERRORE QUANDO FILTRO
        unset($filters["page"]);
        // 
        $selected = $request->query('genres');
        $title = $request->query('title');



        //FILTRO PER IL TITOLO
        function getByTitle($movies, $title)
        {
            $movies = $movies->where('title', "LIKE", "%$title%");
            return $movies;
        }
        // FILTRO PER GENERI SELEZIONATI
        function getByGenresSelected($movies, $selectedGenres)
        {
            return $movies->whereHas('genres', function (Builder $query) use ($selectedGenres) {
                $query->whereIn('genres.id', $selectedGenres);
            });
        }
        // FILTRO PER IL TITOLO E I GENERI
        function getByAllFilters($movies, $title, $selected)
        {
            $movies = $movies
                ->where('title', "LIKE", "%$title%")
                ->whereHas('genres', function (Builder $query) use ($selected) {
                    $query->where('genres.id', $selected);
                });
            return $movies;
        }


        // SE I GENERI E IL TITOLO CI SONO 
        if ($selected && $title) {
            return getByAllFilters($movies, $title, $selected)->paginate(5);
            // SE CI SONO I GENERI E IL TITOLO è VUOTO
        } else if ($selected  && $title == null) {
            return getByGenresSelected($movies, $selected)->paginate(5);
            //ALTRIMENTI
        } else {
            return getByTitle($movies, $title)->paginate(5);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
