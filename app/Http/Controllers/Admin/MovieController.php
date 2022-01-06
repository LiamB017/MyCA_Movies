<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Allow index to use Movie model
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movies = Movie::all();
        return view('admin.movies.index', [
            'movies' => $movies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //The Movie that is created will be stored in the database when the user clicks submit
        $request->validate([
            'title' => 'required',
            'genre' =>'required|max:25',
            'release_year' =>'required|date|before:today',
            'description' =>'required|max:500',
            'director' =>'required|max:25',
            'age_rating' =>'required|max:25',
            'run_time' => 'required|max:25',
            
        ]);

        // if validation passes create the new movie
        $movie = new Movie();
        $movie->title = $request->input('title');
        $movie->genre = $request->input('genre');
        $movie->release_year = $request->input('release_year');
        $movie->description = $request->input('description');
        $movie->director = $request->input('director');
        $movie->age_rating = $request->input('age_rating');
        $movie->run_time = $request->input('run_time');
        $movie->save();

        // Once new Movie is created, redirect to display all Movies
        return redirect()->route('admin.movies.index');
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
        $movie = Movie::findOrFail($id);

        return view('admin.movies.show' , [
            'movie' => $movie
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
   // get the festival by ID from the Database
   $movie = Movie::findOrFail($id);

   // Load the edit view and pass the festival to
   // that view
   return view('admin.movies.edit', [
       'movie' => $movie
    ]);
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
       // first get the existing festival that the user is update
       $movie = Movie::findOrFail($id);
       $request->validate([
        'title' => 'required',
        'genre' =>'required|max:25',
        'release_year' =>'required|date|before:today',
        'description' =>'required|max:500',
        'director' =>'required|max:25',
        'age_rating' =>'required|max:25',
        'run_time' => 'required|max:25',
        
       ]);

       // if validation passes then update existing festival
       $movie->title = $request->input('title');
        $movie->genre = $request->input('genre');
        $movie->release_year = $request->input('release_year');
        $movie->description = $request->input('description');
        $movie->director = $request->input('director');
        $movie->age_rating = $request->input('age_rating');
        $movie->run_time = $request->input('run_time');
        $movie->save();

       return redirect()->route('admin.movies.index');
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
        $movie = Movie::findOrFail($id);
        $movie->delete();

         return redirect()->route('admin.movies.index');
        
    }
}
