<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FoodZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodZoneController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $food_zones = FoodZone::all();

        return view('admin.food_zones.index',compact(['user','food_zones']));
    }
    public function create()
    {
        $user = Auth::user();

        return view('admin.food_zones.create',compact(['user']));
    }
    public function store()
    {
        $name = request()->input('name');
        $description = request()->input('description');
        $photo_url = request()->file('photo_url')->store('food_zones_url', 'uploads');
        $photo_menu_url = request()->file('photo_menu_url')->store('food_zones_url', 'uploads');


        $data = array(
            'name'=>$name,
            'description'=>$description,
            'photo'=>$photo_url,
            'menu_url'=>$photo_menu_url
        );

        FoodZone::create($data);
        return redirect()->route('admin.food_zones.index');
    }

    public function edit(FoodZone $food_zone)
    {
        $user = Auth::user();
        return view('admin.food_zones.edit', compact(['food_zone','user']));
    }

    public function update(FoodZone $food_zone)
    {
        $name = request()->input('name');
        $description = request()->input('description');

        if (request()->file('photo_url') == null){
            $photo_url = request()->input('photo_url_hidden');

        }else {
            $photo_url = request()->file('photo_url')->store('food_zones_url', 'uploads');
        }

        if (request()->file('photo_menu_url') == null){
            $photo_menu_url = request()->input('photo_menu_url_hidden');

        }else {
            $photo_menu_url = request()->file('photo_menu_url')->store('food_zones_url', 'uploads');
        }
        $data = array(
            'name'=>$name,
            'description'=>$description,
            'photo'=>$photo_url,
            'menu_url'=>$photo_menu_url,
        );

        $food_zone->update($data);
        return redirect()->route('admin.food_zones.index');
    }

    public function destroy(FoodZone $food_zone)
    {
        $food_zone->delete();
        return redirect()->route('admin.food_zones.index');
    }
}
