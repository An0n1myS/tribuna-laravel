<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\FoodZone;
use App\Models\Gallery;
use App\Models\Map;
use App\Models\News;
use App\Models\Review;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PageController extends Controller
{
    public function mainPage()
    {
        $now = Carbon::now();
        $events =Event::where('date_time', '>', $now)
            ->orderBy('date_time')
            ->limit(3)
            ->get();
        $all_news =News::orderBy('date')
            ->limit(2)
            ->get();

        return view('main',compact(['events','all_news',]));
    }
    public function eventPage(){
        $now = Carbon::now();
        $limit_events =Event::where('date_time', '>', $now)
            ->orderBy('date_time')
            ->limit(3)
            ->get();
        $events =Event::where('date_time', '<', $now)
            ->orderBy('date_time')
            ->get();
        return view('events.index',compact(['limit_events','events']));
    }
    public function servicePage(){
        $actual_services = Service::where('actual', true)->get();
        $services = Service::where('actual', false)->get();


        return view('services.index', compact(['actual_services','services']));
    }

    public function foodZonePage(){
        $food_zones = FoodZone::all();
        return view('food_zones.index', compact('food_zones'));
    }
    public function galleryPage(){
        $gallerys = Gallery::all();
        return view('gallery', compact('gallerys'));
    }
    public function newsPage(){
        $all_news = News::orderBy('date')->get();
        return view('news.index', compact('all_news'));
    }
    public function mapPage(){
        $items = Map::all();
        $categories = Category::all();
        $reviews = Review::all();
        return view('map', compact(['items','categories','reviews']));
    }

}
