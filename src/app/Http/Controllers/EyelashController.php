<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EyelashGenre;
use App\Models\EyelashA;
use App\Models\EyelashB;
use App\Models\EyelashC;
use App\Models\EyelashD;

class EyelashController extends Controller
{
    public function index()
    {
        $eyelash_genres = EyelashGenre::all();
        $eyelashAs = EyelashA::all();
        $eyelashBs = EyelashB::all();
        $eyelashCs = EyelashC::all();
        $eyelashDs = EyelashD::all();
        return view('eyelash', compact(
            'eyelash_genres',
            'eyelashAs',
            'eyelashBs',
            'eyelashCs',
            'eyelashDs',
        ));
    }

    public function admin_index()
    {
        $eyelash_genres = EyelashGenre::all();
        $eyelashAs = EyelashA::all();
        $eyelashBs = EyelashB::all();
        $eyelashCs = EyelashC::all();
        $eyelashDs = EyelashD::all();
        return view('admin_eyelash', compact(
            'eyelash_genres',
            'eyelashAs',
            'eyelashBs',
            'eyelashCs',
            'eyelashDs',
        ));
    }

    public function admin_store(Request $request)
    {
        if( $request['genre'] == 1 ){
            EyelashA::create([
                'name' => $request->name,
                'eyelash_genre_id' => 1,
                'plice' => $request->plice
            ]);
        }
        if( $request['genre'] == 2 ){
            EyelashB::create([
                'name' => $request->name,
                'eyelash_genre_id' => 2,
                'plice' => $request->plice
            ]);
        }
        if( $request['genre'] == 3 ){
            EyelashC::create([
                'name' => $request->name,
                'eyelash_genre_id' => 3,
                'plice' => $request->plice
            ]);
        }
        if( $request['genre'] == 4 ){
            EyelashD::create([
                'name' => $request->name,
                'eyelash_genre_id' => 4,
                'plice' => $request->plice
            ]);
        }
        return redirect()
            ->route('admin_eyelash')
            ->withStatus("追加しました");
    }

    public function admin_delete($id, $genre_id)
    {
        $eyelash_genre = EyelashGenre::where('id', $genre_id)->first();

        if( $eyelash_genre['id'] == 1 ){
            $eyelash_delete = EyelashA::where('id', $id)->first();
            $eyelash_delete->delete();
        }
        if( $eyelash_genre['id'] == 2 ){
            $eyelash_delete = EyelashB::where('id', $id)->first();
            $eyelash_delete->delete();
        }
        if( $eyelash_genre['id'] == 3 ){
            $eyelash_delete = EyelashC::where('id', $id)->first();
            $eyelash_delete->delete();
        }
        if( $eyelash_genre['id'] == 4 ){
            $eyelash_delete = EyelashD::where('id', $id)->first();
            $eyelash_delete->delete();
        }
        return redirect()
            ->route('admin_eyelash')
            ->withStatus("削除しました");
    }

    public function admin_show($id, $genre_id)
    {
        $eyelash_genre = EyelashGenre::where('id', $genre_id)->first();

        if( $eyelash_genre['id'] == 1 ){
            $eyelash_update = EyelashA::where('id', $id)->first();
        }
        if( $eyelash_genre['id'] == 2 ){
            $eyelash_update = EyelashB::where('id', $id)->first();
        }
        if( $eyelash_genre['id'] == 3 ){
            $eyelash_update = EyelashC::where('id', $id)->first();
        }
        if( $eyelash_genre['id'] == 4 ){
            $eyelash_update = EyelashD::where('id', $id)->first();
        }
        return view('admin_eyelash_show', compact(
            'eyelash_update'
        ));
    }

    public function admin_update(Request $request, $id, $genre_id)
    {
        $eyelash_genre = EyelashGenre::where('id', $genre_id)->first();
    
        if( $eyelash_genre['id'] == 1 ){
            $eyelash_update = EyelashA::where('id', $id)->first();
        }
        if( $eyelash_genre['id'] == 2 ){
            $eyelash_update = EyelashB::where('id', $id)->first();
        }
        if( $eyelash_genre['id'] == 3 ){
            $eyelash_update = EyelashC::where('id', $id)->first();
        }
        if( $eyelash_genre['id'] == 4 ){
            $eyelash_update = EyelashD::where('id', $id)->first();
        }
        $eyelash_update['name'] = $request['name'];
        $eyelash_update['plice'] = $request['plice'];
        $eyelash_update->save();

        return redirect()
            ->route('admin_eyelash')
            ->withStatus("更新しました");
    }
}
