<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LexiconController extends Controller
{
    public function create()
    {
        return view('lexicon.create');
    }
}
