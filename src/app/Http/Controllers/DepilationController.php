<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DepilationA;
use App\Models\DepilationB;
use App\Models\DepilationC;
use App\Models\DepilationGenre;
use App\Models\DepilationPart;
use App\Models\DepilationSDetail;
use App\Models\DepilationLDetail;

class DepilationController extends Controller
{
    public function index()
    {
        $depilation_As = DepilationA::all();
        $depilation_Bs = DepilationB::all();
        $depilation_Cs = DepilationC::all();
        $depilation_genres = DepilationGenre::all();
        $depilation_parts = DepilationPart::all();
        $depilation_s_details = DepilationSDetail::all();
        $depilation_l_details = DepilationLdetail::all();
        return view('depilation', compact(
            'depilation_As',
            'depilation_Bs',
            'depilation_Cs',
            'depilation_genres',
            'depilation_parts',
            'depilation_s_details',
            'depilation_l_details'
        ));
    }

    public function admin_index()
    {
        $depilation_As = DepilationA::all();
        $depilation_Bs = DepilationB::all();
        $depilation_Cs = DepilationC::all();
        $depilation_genres = DepilationGenre::all();
        $depilation_parts = DepilationPart::all();
        $depilation_s_details = DepilationSDetail::all();
        $depilation_l_details = DepilationLdetail::all();
        return view('admin_depilation', compact(
            'depilation_As',
            'depilation_Bs',
            'depilation_Cs',
            'depilation_genres',
            'depilation_parts',
            'depilation_s_details',
            'depilation_l_details'
        ));
    }

    public function admin_store(Request $request)
    {
        if( $request['genre'] == 1 ){
            DepilationA::create([
                'name' => $request->name,
                'depilation_genre_id' => 1,
                'plice' => $request->plice
            ]);
        }
        if( $request['genre'] == 2 ){
            DepilationB::create([
                'name' => $request->name,
                'depilation_genre_id' => 2,
                'plice' => $request->plice
            ]);
        }
        if( $request['genre'] == 3 ){
            DepilationC::create([
                'name' => $request->name,
                'depilation_genre_id' => 3,
                'plice' => $request->plice
            ]);
        }
        return redirect()
            ->route('admin_depilation')
            ->withStatus("追加しました");
    }

    public function admin_delete($id, $genre_id)
    {
        $depilation_genre = DepilationGenre::where('id', $genre_id)->first();

        if( $depilation_genre['id'] == 1 ){
            $depilation_delete = DepilationA::where('id', $id)->first();
            $depilation_delete->delete();
        }
        if( $depilation_genre['id'] == 2 ){
            $depilation_delete = DepilationB::where('id', $id)->first();
            $depilation_delete->delete();
        }
        if( $depilation_genre['id'] == 3 ){
            $depilation_delete = DepilationC::where('id', $id)->first();
            $depilation_delete->delete();
        }
        if( $depilation_genre['id'] == 4 ){
            $depilation_delete = DepilationD::where('id', $id)->first();
            $depilation_delete->delete();
        }
        return redirect()
            ->route('admin_depilation')
            ->withStatus("削除しました");
    }

    public function admin_show($id, $genre_id)
    {
        $depilation_genre = DepilationGenre::where('id', $genre_id)->first();

        if( $depilation_genre['id'] == 1 ){
            $depilation_update = DepilationA::where('id', $id)->first();
        }
        if( $depilation_genre['id'] == 2 ){
            $depilation_update = DepilationB::where('id', $id)->first();
        }
        if( $depilation_genre['id'] == 3 ){
            $depilation_update = DepilationC::where('id', $id)->first();
        }
        if( $depilation_genre['id'] == 4 ){
            $depilation_update = DepilationD::where('id', $id)->first();
        }
        return view('admin_depilation_show', compact(
            'depilation_update'
        ));
    }

    public function admin_update(Request $request, $id, $genre_id)
    {
        $depilation_genre = DepilationGenre::where('id', $genre_id)->first();
    
        if( $depilation_genre['id'] == 1 ){
            $depilation_update = DepilationA::where('id', $id)->first();
        }
        if( $depilation_genre['id'] == 2 ){
            $depilation_update = DepilationB::where('id', $id)->first();
        }
        if( $depilation_genre['id'] == 3 ){
            $depilation_update = DepilationC::where('id', $id)->first();
        }
        if( $depilation_genre['id'] == 4 ){
            $depilation_update = DepilationD::where('id', $id)->first();
        }
        $depilation_update['name'] = $request['name'];
        $depilation_update['plice'] = $request['plice'];
        $depilation_update->save();

        return redirect()
            ->route('admin_depilation')
            ->withStatus("更新しました");
    }
    public function admin_part_s_store(Request $request)
    {
        DepilationSDetail::create([
            'name' => $request['name']
        ]);
        return redirect()
            ->route('admin_depilation')
            ->withStatus('追加しました');
    }

    public function admin_part_s_show($id)
    {
        $S = DepilationSDetail::find($id);
        return view('admin_depilation_partS_show', compact(
            'S'
        ));
    }

    public function admin_part_s_delete($id)
    {
        $S = DepilationSDetail::find($id);
        $S->delete();

        return redirect()
            ->route('admin_depilation')
            ->withStatus('削除しました');
    }

    public function admin_part_s_update(Request $request, $id)
    {
        $S = DepilationSDetail::find($id);

        $S['name'] = $request['name'];
        $S->save();
        return redirect()
            ->route('admin_depilation_partS.show', $S['id'])
            ->withStatus('更新しました');
    }
    
    public function admin_part_l_store(Request $request)
    {
        DepilationLDetail::create([
            'name' => $request['name']
        ]);
        return redirect()
            ->route('admin_depilation')
            ->withStatus('追加しました');
    }

    public function admin_part_l_show($id)
    {
        $L = DepilationLDetail::find($id);
        return view('admin_depilation_partL_show', compact(
            'L'
        ));
    }

    public function admin_part_L_delete($id)
    {
        $L = DepilationLDetail::find($id);
        $L->delete();

        return redirect()
            ->route('admin_depilation')
            ->withStatus('削除しました');
    }

    public function admin_part_l_update(Request $request, $id)
    {
        $L = DepilationLDetail::find($id);

        $L['name'] = $request['name'];
        $L->save();
        return redirect()
            ->route('admin_depilation_partL.show', $L['id'])
            ->withStatus('更新しました');
    }
}
