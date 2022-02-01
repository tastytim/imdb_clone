<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $MoviesList = [
            [
                "id" => 1,
                "title" => "Disaster Movie",
                "description" => "<p>quia et <strong>suscipit</strong>
                        suscipit <em>recusandae consequuntur</em> expedita et cum
                        reprehenderit molestiae ut ut quas totam
                        nostrum rerum est autem sunt rem eveniet architecto</p>",
                "year" => 2019,
                "poster" => "https://picsum.photos/400/400",
                "duration" =>  "01:20",
                "trailer_url" => "https://www.youtube.com/watch?v=ejsE5Smp3io",
                "pegi_id" => 1
            ],

            [
                "id" => 2,
                "title" => "The Day After Tomorrow",
                "description" => "<p>quia et <strong>suscipit</strong>
                        suscipit <em>recusandae consequuntur</em> expedita et cum
                        reprehenderit molestiae ut ut quas totam
                        nostrum rerum est autem sunt rem eveniet architecto</p>",
                "year" => 2020,
                "poster" => "https://picsum.photos/400/400",
                "duration" =>  "01:40",
                "trailer_url" => "https://www.youtube.com/watch?v=Ku_IseK3xTc",
                "pegi_id" => 1
            ],
            [
                "id" => 3,
                "title" => "Apocalypse Now",
                "description" => "<p>quia et <strong>suscipit</strong>
                        suscipit <em>recusandae consequuntur</em> expedita et cum
                        reprehenderit molestiae ut ut quas totam
                        nostrum rerum est autem sunt rem eveniet architecto</p>",
                "year" => 2019,
                "poster" => "https://picsum.photos/400/400",
                "duration" =>  "02:20",
                "trailer_url" => "https://www.youtube.com/watch?v=PA24tnAcuQg",
                "pegi_id" => 1
            ],
        ];
        return view('guests.index',compact('MoviesList'));
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
