<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PartsRequest;
use App\Http\Requests\PartsUpdateRequest;
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

    public function update(PartsUpdateRequest $request, $id)
    {
        $part_update = Part::find($id);
        $part_update['part'] = $request['part_update'];
        $part_update->save();
        
        return redirect()
            ->route('parts.index');
        
    }

    public function delete($id)
    {
        $part_delete = Part::find($id);
        $part_delete->delete();

        return redirect()
            ->route('parts.index');
    }

    public function store(PartsRequest $request)
    {
        Part::create([
            'part' => $request['part_input']
        ]);

        return redirect()
            ->back();
    }
}
