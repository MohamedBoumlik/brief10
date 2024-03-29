<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Category;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::paginate(8);  
        return view('movies.index',compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Category::all();
        return view('movies.create',compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $film = new Film;
        $film->title = $request->title;
        $film->image = $request->image;
        $film->category_id = $request->type;
        $film->save();
        return redirect('film')->with('addflm','Film Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film=Film::findOrFail($id);
        return view('movies.show',compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film=Film::findOrFail($id);
        $types = Category::all();
        return view('movies.edit',compact('film','types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $film=Film::findOrFail($id);
        $film->title=$request->title;
        $film->image = $request->image;
        $film->category_id = $request->type;

        $film->save();
        return redirect()->route('film.index')->with("editflm","Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film=Film::findOrFail($id);
        Film::destroy($id);
        return redirect()->back()->with("dltfilm","Film Deleted");
    }
}
