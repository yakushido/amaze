<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BridalA;
use App\Models\BridalB;
use App\Models\BridalC;
use App\Models\BridalD;
use App\Models\BridalGenre;

class BridalController extends Controller
{
    public function index()
    {
        $bridal_genres = BridalGenre::all();
        $bridal_As = BridalA::all();
        $bridal_Bs = BridalB::all();
        $bridal_Cs = BridalC::all();
        $bridal_Ds = BridalD::all();
        return view('bridal', compact(
            'bridal_genres',
            'bridal_As',
            'bridal_Bs',
            'bridal_Cs',
            'bridal_Ds',
        ));
    }

    public function admin_index()
    {
        $bridal_As = BridalA::all();
        $bridal_Bs = BridalB::all();
        $bridal_Cs = BridalC::all();
        $bridal_Ds = BridalD::all();
        $bridal_genres = BridalGenre::all();
        return view('admin_bridal', compact(
            'bridal_As',
            'bridal_Bs',
            'bridal_Cs',
            'bridal_Ds',
            'bridal_genres',
        ));
    }

    public function admin_store(Request $request)
    {
        if( $request['genre'] == 1 ){
            BridalA::create([
                'name' => $request->name,
                'bridal_genre_id' => 1,
                'plice' => $request->plice
            ]);
        }
        if( $request['genre'] == 2 ){
            BridalB::create([
                'name' => $request->name,
                'bridal_genre_id' => 2,
                'plice' => $request->plice
            ]);
        }
        if( $request['genre'] == 3 ){
            BridalC::create([
                'name' => $request->name,
                'bridal_genre_id' => 3,
                'plice' => $request->plice
            ]);
        }
        if( $request['genre'] == 4 ){
            BridalD::create([
                'name' => $request->name,
                'part' => $request->part,
                'bridal_genre_id' => 4,
                'plice' => $request->plice
            ]);
        }
        return redirect()
            ->route('admin_bridal')
            ->withStatus("追加しました");
    }

    public function admin_delete($id, $genre_id)
    {
        $bridal_genre = BridalGenre::where('id', $genre_id)->first();

        if( $bridal_genre['id'] == 1 ){
            $bridal_delete = BridalA::where('id', $id)->first();
            $bridal_delete->delete();
        }
        if( $bridal_genre['id'] == 2 ){
            $bridal_delete = BridalB::where('id', $id)->first();
            $bridal_delete->delete();
        }
        if( $bridal_genre['id'] == 3 ){
            $bridal_delete = BridalC::where('id', $id)->first();
            $bridal_delete->delete();
        }
        if( $bridal_genre['id'] == 4 ){
            $bridal_delete = bridalD::where('id', $id)->first();
            $bridal_delete->delete();
        }
        return redirect()
            ->route('admin_bridal')
            ->withStatus("削除しました");
    }

    public function admin_show($id, $genre_id)
    {
        $bridal_genre = BridalGenre::where('id', $genre_id)->first();

        if( $bridal_genre['id'] == 1 ){
            $bridal_update = BridalA::where('id', $id)->first();
        }
        if( $bridal_genre['id'] == 2 ){
            $bridal_update = BridalB::where('id', $id)->first();
        }
        if( $bridal_genre['id'] == 3 ){
            $bridal_update = BridalC::where('id', $id)->first();
        }
        if( $bridal_genre['id'] == 4 ){
            $bridal_update = bridalD::where('id', $id)->first();
        }
        return view('admin_bridal_show', compact(
            'bridal_update'
        ));
    }

    public function admin_update(Request $request, $id, $genre_id)
    {
        $bridal_genre = BridalGenre::where('id', $genre_id)->first();
    
        if( $bridal_genre['id'] == 1 ){
            $bridal_update = BridalA::where('id', $id)->first();
        }
        if( $bridal_genre['id'] == 2 ){
            $bridal_update = BridalB::where('id', $id)->first();
        }
        if( $bridal_genre['id'] == 3 ){
            $bridal_update = BridalC::where('id', $id)->first();
        }
        if( $bridal_genre['id'] == 4 ){
            $bridal_update = bridalD::where('id', $id)->first();
            $bridal_update['part'] = $request['part'];
        }
        $bridal_update['name'] = $request['name'];
        $bridal_update['plice'] = $request['plice'];
        $bridal_update->save();

        return redirect()
            ->route('admin_bridal')
            ->withStatus("更新しました");
    }
}
