<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $all_news = News::all();

        return view('admin.news.index',compact(['user','all_news']));
    }
    public function create()
    {
        $user = Auth::user();

        return view('admin.news.create',compact(['user']));
    }
    public function store()
    {
        $name = request()->input('name');
        $description = request()->input('description');
        $photo_url = request()->file('photo_url')->store('news_url', 'uploads');


        $data = array(
            'title'=>$name,
            'description'=>$description,
            'photo'=>$photo_url
        );

        News::create($data);
        return redirect()->route('admin.news.index');
    }

    public function edit(News $news)
    {
        $user = Auth::user();
        return view('admin.news.edit', compact(['news','user']));
    }

    public function update(News $news)
    {
        $name = request()->input('name');
        $description = request()->input('description');

        if (request()->file('photo_url') == null){
            $photo_url = request()->input('photo_url_hidden');

        }else {
            $photo_url = request()->file('photo_url')->store('news_url', 'uploads');
        }

        $data = array(
            'title'=>$name,
            'description'=>$description,
            'photo'=>$photo_url,
        );

        $news->update($data);
        return redirect()->route('admin.news.index');
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('admin.news.index');
    }
}
