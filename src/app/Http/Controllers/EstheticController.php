<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EstheticA;
use App\Models\EstheticB;
use App\Models\EstheticC;
use App\Models\EstheticD;
use App\Models\EstheticGenre;
use App\Models\EstheticPart;

class EstheticController extends Controller
{
    public function index()
    {
        $esthetic_As = EstheticA::all();
        $esthetic_Bs = EstheticB::all();
        $esthetic_Cs = EstheticC::all();
        $esthetic_Ds = EstheticD::all();
        $esthetic_parts = EstheticPart::all();
        $esthetic_genres = EstheticGenre::all();
        return view('esthetic', compact(
            'esthetic_As',
            'esthetic_Bs',
            'esthetic_Cs',
            'esthetic_Ds',
            'esthetic_genres',
            'esthetic_parts'
        ));
    }

}
