<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;

class AdminController extends Controller
{
    public function index()
    {
        $genders = Gender::all();

        return view('dashboard', compact(
            'genders'
        ));
    }

}
