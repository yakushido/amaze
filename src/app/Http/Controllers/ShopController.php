<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopImage;

class ShopController extends Controller
{
    public function index()
    {
        $shop_pictures = ShopImage::where('category_id', 1)->get();

        return view('welcome', compact(
            'shop_pictures'
        ));
    }
}
