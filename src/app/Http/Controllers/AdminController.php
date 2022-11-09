<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ShopImage;

class AdminController extends Controller
{
    public function index()
    {
        $categoryLists = Category::all();

        return view('admin', compact(
            'categoryLists'
        ));
    }

    public function store(Request $request)
    {
        $img = $request->file('img_path')->getClientOriginalName();
        
        $path = $request->file('img_path')->storeAs('public/img',$img);
        
        ShopImage::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'picture' => $path
        ]);

        return redirect()
            ->route('admin')
            ->withStatus("追加しました");
    }
}
