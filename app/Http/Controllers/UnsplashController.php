<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnsplashController extends Controller
{
    public function index()
    {
        return view('unsplash.index');
    }
}
