<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Esthetic;
use App\Models\EstheticGenre;
use App\Models\EstheticPart;

class EstheticController extends Controller
{
    public function index()
    {
        $esthetic_lists = Esthetic::all();
        $esthetic_parts = EstheticPart::all();
        $esthetic_genres = EstheticGenre::all();
        return view('esthetic', compact(
            'esthetic_lists',
            'esthetic_genres',
            'esthetic_parts'
        ));
    }

}
