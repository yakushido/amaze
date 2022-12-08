<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;

class MenuController extends Controller
{
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

    public function menu_store(Request $request)
    {
        Menu::create([
            'menu' => $request['menu'],
            'priceA' => $request['priceA'],
            'priceB' => $request['priceB'],
            'category_id' => $request['category'],
            'gender_id' => $request['gender'],
            'part_id' => $request['part']
        ]);
        return redirect()
            ->back();
    }

    
}
