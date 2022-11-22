<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NailA;
use App\Models\NailB;
use App\Models\NailC;
use App\Models\NailD;
use App\Models\NailGenre;

class NailController extends Controller
{
    public function index()
    {
        $nail_As = NailA::all();
        $nail_Bs = NailB::all();
        $nail_Cs = NailC::all();
        $nail_Ds = NailD::all();
        $nail_genres = NailGenre::all();
        
        return view('nail', compact(
            'nail_As',
            'nail_Bs',
            'nail_Cs',
            'nail_Ds',
            'nail_genres',
        ));
    }

    public function admin_index()
    {
        $nail_genres = NailGenre::all();
        $nail_As = NailA::all();
        $nail_Bs = NailB::all();
        $nail_Cs = NailC::all();
        $nail_Ds = NailD::all();
        return view('admin_nail', compact(
            'nail_genres',
            'nail_As',
            'nail_Bs',
            'nail_Cs',
            'nail_Ds',
        ));
    }

    public function admin_store(Request $request)
    {
        if( $request['genre'] == 1 ){
            NailA::create([
                'name' => $request->name,
                'nail_genre_id' => 1,
                'plice' => $request->plice
            ]);
        }
        if( $request['genre'] == 2 ){
            NailB::create([
                'name' => $request->name,
                'nail_genre_id' => 2,
                'plice' => $request->plice
            ]);
        }
        if( $request['genre'] == 3 ){
            NailC::create([
                'name' => $request->name,
                'nail_genre_id' => 3,
                'plice_A' => $request->plice_A,
                'plice_B' => $request->plice_B
            ]);
        }
        if( $request['genre'] == 4 ){
            NailD::create([
                'name' => $request->name,
                'nail_genre_id' => 4,
                'plice' => $request->plice
            ]);
        }
        return redirect()
            ->route('admin_nail')
            ->withStatus("追加しました");
    }

    public function admin_delete($id, $genre_id)
    {
        $nail_genre = NailGenre::where('id', $genre_id)->first();

        if( $nail_genre['id'] == 1 ){
            $nail_delete = NailA::where('id', $id)->first();
            $nail_delete->delete();
        }
        if( $nail_genre['id'] == 2 ){
            $nail_delete = NailB::where('id', $id)->first();
            $nail_delete->delete();
        }
        if( $nail_genre['id'] == 3 ){
            $nail_delete = NailC::where('id', $id)->first();
            $nail_delete->delete();
        }
        if( $nail_genre['id'] == 4 ){
            $nail_delete = NailD::where('id', $id)->first();
            $nail_delete->delete();
        }
        return redirect()
            ->route('admin_nail')
            ->withStatus("削除しました");
    }

    public function admin_show($id, $genre_id)
    {
        $nail_genre = NailGenre::where('id', $genre_id)->first();

        if( $nail_genre['id'] == 1 ){
            $nail_update = NailA::where('id', $id)->first();
        }
        if( $nail_genre['id'] == 2 ){
            $nail_update = NailB::where('id', $id)->first();
        }
        if( $nail_genre['id'] == 3 ){
            $nail_update = NailC::where('id', $id)->first();
        }
        if( $nail_genre['id'] == 4 ){
            $nail_update = NailD::where('id', $id)->first();
        }
        return view('admin_nail_show', compact(
            'nail_update'
        ));
    }

    public function admin_update(Request $request, $id, $genre_id)
    {
        $nail_genre = NailGenre::where('id', $genre_id)->first();

        if( $nail_genre['id'] == 1 ){
            $nail_update = NailA::where('id', $id)->first();
            $nail_update['plice'] = $request['plice'];
        }
        if( $nail_genre['id'] == 2 ){
            $nail_update = NailB::where('id', $id)->first();
            $nail_update['plice'] = $request['plice'];
        }
        if( $nail_genre['id'] == 3 ){
            $nail_update = NailC::where('id', $id)->first();
            // dd($nail_update['plice_A'], $request['plice_A']);
            $nail_update['plice_A'] = $request['plice_A'];
            $nail_update['plice_B'] = $request['plice_B'];
        }
        if( $nail_genre['id'] == 4 ){
            $nail_update = NailD::where('id', $id)->first();
            $nail_update['plice'] = $request['plice'];
        }
        $nail_update['name'] = $request['name'];
        $nail_update->save();

        return redirect()
            ->route('admin_nail')
            ->withStatus("更新しました");
    }
}
