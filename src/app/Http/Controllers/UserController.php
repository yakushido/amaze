<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user', compact(
            'users'
        ));
    }

    public function store(UserRequest $request)
    {
        $img = $request->file('picture')->getClientOriginalName();
        
        $path = $request->file('picture')->storeAs('public/img',$img);
        
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
            'picture' => $path,
            'detail' => $request['detail'],
        ]);

        return redirect()
            ->back();
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('user_show', compact(
            'user'
        ));
    }

    public function update(UserRequest $request, $id)
    {
        $user_update = User::find($id);

        $img = $request->file('picture')->getClientOriginalName();
        
        $path = $request->file('picture')->storeAs('public/img',$img);
        
        $user_update['name'] = $request['name'];
        $user_update['email'] = $request['email'];
        $user_update['password'] = $request['password'];
        $user_update['picture'] = $path;
        $user_update['detail'] = $request['detail'];
        
        $user_update->save();

        return redirect()
            ->back();
    }

    public function delete($id)
    {
        $user_delete = User::find($id);

        $user_delete->delete();

        return redirect()
            ->route('user.index');
    }
}
