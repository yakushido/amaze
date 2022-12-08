<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\Gender;

class CampaignController extends Controller
{
    public function show($id)
    {
        $campaign = Campaign::find($id);
        $genders = Gender::all();

        return view('campaign', compact(
            'campaign',
            'genders'
        ));
    }

    public function index()
    {   
        $campaigns = Campaign::all();
        $genders = Gender::all();
        $today = date("Y-m-d H:i:s");

        return view('admin_campaign', compact(
            'campaigns',
            'genders',
            'today'
        ));
    }

    public function store(Request $request)
    {
        Campaign::create([
            'title' => $request['title'],
            'detail' => $request['detail'],
            'gender_id' => $request['gender'],
            'start' => $request['start'],
            'end' => $request['end']
        ]);
        
        return redirect()
            ->back();
    }
}
