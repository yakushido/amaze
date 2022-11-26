<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wormwood;
use App\Models\WormwoodGenre;

class WormwoodController extends Controller
{
    public function index()
    {
        $wormwood_genres = WormwoodGenre::all();
        $wormwood_lists = Wormwood::all();
        return view('wormwood', compact(
            'wormwood_genres',
            'wormwood_lists'
        ));
    }

    public function admin_index()
    {
        $wormwood_genres = WormwoodGenre::all();
        $wormwood_lists = Wormwood::all();
        return view('admin_wormwood', compact(
            'wormwood_genres',
            'wormwood_lists'
        ));
    }

    public function admin_store(Request $request)
    {
        if( $request['genre'] == 1 ){
            WormwoodA::create([
                'name' => $request->name,
                'wormwood_genre_id' => 1,
                'plice' => $request->plice
            ]);
        }
        return redirect()
            ->route('admin_wormwood')
            ->withStatus("追加しました");
    }

    public function admin_delete($id, $genre_id)
    {
        $wormwood_genre = WormwoodGenre::where('id', $genre_id)->first();

        if( $wormwood_genre['id'] == 1 ){
            $wormwood_delete = WormwoodA::where('id', $id)->first();
            $wormwood_delete->delete();
        }
        return redirect()
            ->route('admin_wormwood')
            ->withStatus("削除しました");
    }

    public function admin_show($id, $genre_id)
    {
        $wormwood_genre = WormwoodGenre::where('id', $genre_id)->first();

        if( $wormwood_genre['id'] == 1 ){
            $wormwood_update = WormwoodA::where('id', $id)->first();
        }
        return view('admin_wormwood_show', compact(
            'wormwood_update'
        ));
    }

    public function admin_update(Request $request, $id, $genre_id)
    {
        $wormwood_genre = WormwoodGenre::where('id', $genre_id)->first();
    
        if( $wormwood_genre['id'] == 1 ){
            $wormwood_update = WormwoodA::where('id', $id)->first();
        }
        $wormwood_update['name'] = $request['name'];
        $wormwood_update['plice'] = $request['plice'];
        $wormwood_update->save();

        return redirect()
            ->route('admin_wormwood')
            ->withStatus("更新しました");
    }
}
