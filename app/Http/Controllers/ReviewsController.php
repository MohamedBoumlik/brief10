<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::paginate(4);
        return view('reviews', compact('films'));
        
    }

}
