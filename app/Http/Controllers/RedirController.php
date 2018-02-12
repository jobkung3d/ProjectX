<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirMovie()
    {
        return view('layouts.movie.movie-list');
    }
    public function redirTodo()
    {
        return view('layouts.todo.todo');
    }
    public function redirRes()
    {
        return view('layouts.restaurant.restaurant');
    }
}
