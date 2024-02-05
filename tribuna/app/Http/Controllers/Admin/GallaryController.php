<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GallaryController extends Controller
{
    public function index(){
        $user = Auth::user();
        $gallerys = Gallery::all();
        return view('admin.gallery.index', compact(['gallerys','user']));
    }

    public function store()
    {
        $photo_url = request()->file('photo_url')->store('gallery_url', 'uploads');
        $data = array(
            'photo_url'=>$photo_url
        );
        Gallery::create($data);

        return redirect()->route('admin.gallery.index');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('admin.gallery.index');
    }
}
