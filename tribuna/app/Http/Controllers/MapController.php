<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function addReview(){

        $name = request()->input('name');
        $category_id = request()->input('category_id');
        $description = request()->input('description');

        $data = array(
            'name'=>$name,
            'category_id'=>$category_id,
            'content'=>$description
        );

        Review::create($data);
        return redirect()->route('map');
    }
}
