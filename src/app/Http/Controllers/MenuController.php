<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index_men()
    {
        return view('menu_men');
    }

    public function index_women()
    {
        return view('menu_women');
    }
}
