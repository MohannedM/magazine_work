<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;
use App\Channel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        // Get Most Viewed Articles in the past week and if they are less than 3 get the most viewed article in past month
        $most_viewed = Article::where('created_at','>', date('Y-m-d',time() - 60*60*24*7))->orderBy('views', 'desc')->get();
        if(count($most_viewed) < 3){
            $most_viewed = Article::where('created_at','>', date('Y-m-d',time() - 60*60*24*30))->orderBy('views', 'desc')->get();
        }

        // Get latest 5 articles
        $articles = Article::where('is_active', 1)->orderBy('created_at', 'desc')->get();
        $articles = $articles->toArray();
        $firstArticles = array_slice($articles, 0, 5, true);

        //Get latest 3 created channels 
        $channels = Channel::where('is_active', 1)->orderBy('created_at', 'desc')->get();
        $channels = $channels->toArray();
        $latest_channels = array_slice($channels, 0, 3, true);

        return view('dashboard', compact('categories', 'most_viewed', 'firstArticles', 'latest_channels'));
    }
}
