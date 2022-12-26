<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryUpdateRequest;
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

    public function store(CategoryRequest $request)
    {
        $img = $request->file('picture')->getClientOriginalName();
        
        $path = $request->file('picture')->storeAs('public/img',$img);
        
        Category::create([
            'category' => $request['category_input'],
            'picture' => $path,
            'genre_id' => $request['genre']
        ]);

        return redirect()
            ->back();
    } 

    public function update(CategoryUpdateRequest $request, $id)
    {
        $category_update = Category::find($id); 

        $img = $request->file('picture_update')->getClientOriginalName();
        
        $path = $request->file('picture_update')->storeAs('public/img',$img);
        
        $category_update['category'] = $request['category_update'];
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
