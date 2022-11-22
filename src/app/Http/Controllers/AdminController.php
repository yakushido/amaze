<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }

    public function delete($id)
    {
        $user_delete = User::find($id);
        $user_delete->delete();
        return redirect()
            ->route('admin.delete')
            ->withStatus('削除しました');
    }
}
