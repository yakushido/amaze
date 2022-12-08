<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;

class PartsController extends Controller
{
    public function index()
    {
        $parts = Part::all();

        return view('parts', compact(
            'parts'
        ));
    }

    public function update(Request $request, $id)
    {
        $part_update = Part::find($id);
        $part_update['part'] = $request['part'];
        $part_update->save();
        
        return ridirect()
            ->route('parts.index');
        
    }

    public function delete($id)
    {
        $part_delete = Part::find($id);
        $part_delete->delete();

        return ridirect()
            ->route('parts.index');
    }
}
