<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $services = Service::all();

        return view('admin.services.index',compact(['user','services']));
    }
    public function create()
    {
        $user = Auth::user();

        return view('admin.services.create',compact(['user']));
    }
    public function store()
    {
        $name = request()->input('name');
        $description = request()->input('description');
        $entry_type = request()->input('entry-type');
        $price = request()->input('price');
        $photo_url = request()->file('photo_url')->store('events_url', 'uploads');


        $data = array(
            'name'=>$name,
            'description'=>$description,
            'actual'=>$entry_type,
            'price'=>$price,
            'photo'=>$photo_url,
        );

        Service::create($data);
        return redirect()->route('admin.services.index');
    }

    public function edit(Service $service)
    {
        $user = Auth::user();
        return view('admin.services.edit', compact(['service','user']));
    }

    public function update(Service $service)
    {
        $name = request()->input('name');
        $description = request()->input('description');
        $entry_type = request()->input('entry-type');
        $price = request()->input('price');
        if (request()->file('photo_url') == null){
            $photo_url = request()->input('photo_url_hidden');

        }else {
            $photo_url = request()->file('photo_url')->store('events_url', 'uploads');
        }

        $data = array(
            'name'=>$name,
            'description'=>$description,
            'actual'=>$entry_type,
            'price'=>$price,
            'photo'=>$photo_url,
        );

        $service->update($data);
        return redirect()->route('admin.services.index');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index');
    }

}
