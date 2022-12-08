<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Genre;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $genres = Genre::all();
        return view('category', compact(
            'categories',
            'genres'
        ));
    }

    public function show($id)
    {
        $category = Category::find($id);

        return view('category_show', compact(
            'category'
        ));
    }

    public function store(Request $request)
    {
        $img = $request->file('picture')->getClientOriginalName();
        
        $path = $request->file('picture')->storeAs('public/img',$img);
        
        Category::create([
            'category' => $request['category'],
            'picture' => $path,
            'genre_id' => $request['genre']
        ]);

        return redirect()
            ->back();
    } 

    public function update(Request $request, $id)
    {
        $category_update = Category::find($id); 

        $img = $request->file('picture')->getClientOriginalName();
        
        $path = $request->file('picture')->storeAs('public/img',$img);
        
        $category_update['category'] = $request['category'];
        $category_update['picture'] = $path;

        $category_update->save();
        
        return redirect()
            ->route('category.index');
    }

    public function delete($id)
    {
        $category_delete = Category::find($id);
        
        $category_delete->delete();

        return redirect()
            ->route('category.index');
    }
}
