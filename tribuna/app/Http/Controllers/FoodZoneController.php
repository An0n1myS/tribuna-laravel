<?php

namespace App\Http\Controllers;

use App\Models\FoodZone;
use Illuminate\Http\Request;

class FoodZoneController extends Controller
{
    public function show(FoodZone $food_zone){

        return view('food_zones.show', compact('food_zone'));
    }
}
