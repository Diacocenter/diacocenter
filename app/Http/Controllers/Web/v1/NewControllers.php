<?php

namespace App\Http\Controllers\Web\v1;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\News;
use Illuminate\Http\Request;

class NewControllers extends Controller
{
    /**
     * Display the specified resource.
     */
    public function index()
    {
        return view("news.news");
    }

    public function show(News $new)
    {
        return view("news.news")->with("news",$new);
    }
}
