<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('admin.auth.auth');
    }

    public function login(){
        $data = request()->validate([
            'username'=>"",
            'password'=>'',
        ]);

        if (auth("web")->attempt($data)){
            return redirect()->route('admin.events.index');
        }

        return redirect(route('admin.login'));
    }

    public function logout(){
        auth("web")->logout();
        return redirect('/');
    }

    public function main(){
        $user = Auth::user();
        $events = Event::all();
        return view('admin.main', compact(['user','events']));
    }
}
