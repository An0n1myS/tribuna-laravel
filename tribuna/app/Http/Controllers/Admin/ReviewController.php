<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $reviews = Review::all();

        return view('admin.reviews.index',compact(['user','reviews']));
    }
    public function destroy(Review $comment)
    {
        $comment->delete();
        return redirect()->route('admin.reviews.index');
    }

}
