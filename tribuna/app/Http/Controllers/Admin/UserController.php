<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $db_users = User::all();

        return view('admin.users.index',compact(['user','db_users']));
    }

    public function store()
    {
        $data = request()->validate([
            'username'=>'required|string',
            'user_group'=>'required|string',
            'password'=>'required|string',
        ]);

        User::create([
            'username'=>$data['username'],
            'user_group'=>$data['user_group'],
            'password'=>bcrypt($data['password']),
        ]);

        return redirect()->route('admin.users.index');
    }

    public function edit(User $user_guest)
    {
        $user = Auth::user();
        return view('admin.users.edit', compact(['user_guest','user']));
    }

    public function update(User $user_guest)
    {
        $data = request()->validate([
            'username'=>'required|string',
            'user_group'=>'required|string',
            'password'=>'required|string',
        ]);
       $data_user=([
            'username'=>$data['username'],
            'user_group'=>$data['user_group'],
            'password'=>bcrypt($data['password']),
        ]);

        $user_guest->update($data_user);
        return redirect()->route('admin.users.index');
    }

    public function destroy(User $user_guest)
    {
        $user_guest->delete();
        return redirect()->route('admin.users.index');
    }

}
