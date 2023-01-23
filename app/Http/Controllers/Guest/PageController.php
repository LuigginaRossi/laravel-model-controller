<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//importo Movie model:
use App\Models\Movie;


class PageController extends Controller
{
    function index () {
        // recuperate tutti i film dal database e passateli alla view:
        $movies= Movie::all();
        
        // dd($movies);
        // compact('movies')
        return view('index');
    }
};
