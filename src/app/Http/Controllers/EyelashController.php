<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eyelash;
use App\Models\EyelashCategory;
use App\Models\EyelashComment;
use App\Models\EyelashLimit;
use App\Models\EyelashImage;
use App\Models\EyelashCourse;

class EyelashController extends Controller
{
    public function index()
    {
        $eyelashCategories = EyelashCategory::all();
        $eyelashLists = Eyelash::all();
        $eyelashComments = EyelashComment::all();
        $eyelashLimits = EyelashLimit::all();
        $eyelashImages = EyelashImage::all();
        return view('eyelash', compact(
            'eyelashCategories',
            'eyelashLists',
            'eyelashComments',
            'eyelashLimits',
            'eyelashImages',
        ));
    }
}
