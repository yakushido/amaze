<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Genre;
use App\Models\GalleryCategory;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        $genres = Genre::all();
        $gallery_categories = GalleryCategory::all();

        return view('gallery', compact(
            'galleries',
            'genres',
            'gallery_categories'
        ));
    }
}
