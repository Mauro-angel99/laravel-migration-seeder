<?php

namespace App\Http\Controllers;

use App\Train;

class HomeController extends Controller
{
    public function index()
    {
        $trains = Train::all();
    
        return view('layouts.home', compact('trains'));

    }
}