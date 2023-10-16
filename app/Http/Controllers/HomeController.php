<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\News;
use App\Models\Project;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        return view("home-page.home-page")->with("articles", Article::all())->with("news", News::all());
    }

    public function ourStory()
    {
        return view("our-story.our-story");
    }

    public function services()
    {
        return view("services.services");
    }

    public function contactUs()
    {
        return view("contactUs.contactUs");
    }

    public function faq()
    {
        return view("faq.faq");
    }

    public function discover()
    {
        return view("discover.discover")->with("projects" , Project::all());
    }

    public function projects()
    {
        return view("projects.project");
    }

    public function chooseRole()
    {
        return view("auth.choose-role");
    }

    public function verifyEmail()
    {
        return view("auth.verification-email");
    }

    public function cooperational()
    {
        return view("auth.cooperational");
    }

    public function blogNews()
    {
        return view("blog-news.blog-news")->with("articles", Article::all())->with("news", News::all());
    }


//    public function register()
//    {
//        return view("login.login");
//    }

}
