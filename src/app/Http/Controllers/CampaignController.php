<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Campaign;
use  App\Models\Gender;

class CampaignController extends Controller
{
    public function show($id)
    {
        $campaign = Campaign::where('id',$id)->first();
        return view('campaign', compact(
            'campaign'
        ));
    }

    public function admin_index()
    {
        $campaigns = Campaign::orderBy('created_at','desc')->get();
        $today = date("Y-m-d H:i:s");
        $gender_Lists = Gender::all();
        return view('admin_campaign', compact(
            'campaigns',
            'today',
            'gender_Lists'
        ));
    }

    public function admin_store(Request $request)
    {
        Campaign::create([
            "title" => $request['title'],
            "detail" => $request['detail'],
            'start' => $request['start'],
            'end' => $request['end'],
            'gender_id' => $request['gender']
        ]);
        return redirect()
            ->route('admin_campaign')
            ->withStatus('追加しました');
    }

    public function admin_delete($id)
    {
        $campaign_delete = Campaign::find($id);
        $campaign_delete->delete();
        return redirect()
            ->route('admin_campaign')
            ->withStatus('追加しました');
    }

    public function admin_show($id)
    {
        $campaign = Campaign::find($id);
        $campaign_gender = Gender::all();
        return view('admin_campaign_show', compact(
            'campaign',
            'campaign_gender'
        ));
    }

    public function admin_update(Request $request, $id)
    {
        $campaign_update = Campaign::find($id);
        $campaign_update['title'] = $request['title'];
        $campaign_update['start'] = $request['start'];
        $campaign_update['end'] = $request['end'];
        $campaign_update['gender_id'] = $request['gender'];
        $campaign_update['detail'] = $request['detail'];
        // dd($campaign_update);
        $campaign_update->save();
        return redirect()
            ->route('admin_campaign.show', $campaign_update['id'])
            ->withStatus('更新しました');
    }
}
