<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Part;
use App\Models\Gender;
use App\Models\Genre;
use App\Models\PartDetail;
use App\Models\GalleryCategory;

class MenuController extends Controller
{
    public function index($gender_id, $genre_id)
    {
        $categories = Category::where('genre_id', $genre_id)->get();
        $menus = Menu::where('gender_id', $gender_id)->get();
        $parts = Part::all();
        $gender = Gender::find($gender_id);
        $genre = Genre::find($genre_id);
        $part_details = PartDetail::all();
        $gallery_categories = GalleryCategory::all();

        return view('menu', compact(
            'categories',
            'parts',
            'gender',
            'menus',
            'genre',
            'part_details',
            'gallery_categories'
        ));
    }

    public function delete($id)
    {
        $menu_delete = Menu::find($id);
        dd($menu_delete);
        $menu_delete->delete();

        return back();
    }

    public function show($id)
    {
        $menu = Menu::find($id);

        return view('menu_show', compact(
            'menu'
        ));
    }

    public function course_update(Request $request, $id)
    {
        $menu_update = Menu::find($id);
        $menu_update['menu'] = $request['menu'];
        $menu_update['priceA'] = $request['priceA'];
        // dd($menu_update);
        $menu_update -> save();
        
        return redirect()
            ->route('menu.show', [
                'id' => $menu_update['id']
            ]);
    }

    public function store(MenuRequest $request)
    {
        Menu::create([
            'menu' => $request['menu_input'],
            'priceA' => $request['priceA'],
            'priceB' => $request['priceB'],
            'category_id' => $request['category_select'],
            'gender_id' => $request['gender'],
            'part_id' => $request['part_select'],
            'wavy' => $request['wavy'],
            'plus' => $request['plus'],
            'finger' => $request['finger'],
            'fingers' => $request['fingers'],
        ]);
        return redirect()
            ->back();
    }

    
}
