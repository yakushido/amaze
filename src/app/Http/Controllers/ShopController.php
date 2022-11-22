<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\ShopImage;
use App\Models\Campaign;
use App\Models\Category;

class ShopController extends Controller
{
    public function index()
    {
        $shop_pictures = ShopImage::where('category_id', 1)->get();
        $campaigns = Campaign::orderBy('created_at','desc')->get();
        $today = date("Y-m-d H:i:s");
        return view('welcome', compact(
            'shop_pictures',
            'campaigns',
            'today'
        ));
    }

    public function admin_index()
    {
        $categoryLists = Category::all();
        $shop_pictures = ShopImage::where('category_id', 1)->get();

        return view('admin_shop', compact(
            'categoryLists',
            'shop_pictures'
        ));
    }

    public function admin_store(Request $request)
    {
        $img = $request->file('img_path')->getClientOriginalName();
        
        $path = $request->file('img_path')->storeAs('public/img',$img);
        
        ShopImage::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'picture' => $path
        ]);

        return redirect()
            ->route('admin_shop')
            ->withStatus("追加しました");
    }

    public function admin_delete($id)
    {
        $picture_delete = ShopImage::find($id);
        $path = $picture_delete['picture'];
        
        if ($path !== '') {
            Storage::disk('public')->delete(substr($path,7));
        }

        $picture_delete->delete();

        return redirect()
            ->route('admin_shop')
            ->withStatus("削除しました");
    }
}
