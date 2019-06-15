<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;
use App\User;
use App\Magazine;
use App\Article;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('Admin');
        $this->middleware('auth');
    }
    public function index(){
        $channels = Channel::all();
        $users = User::all();
        $magazines = Magazine::all();
        $articles = Article::where('id','>','0')->orderBy('created_at', 'desc')->get();

        return view('admin.index', compact('channels', 'users', 'magazines', 'articles'));
    }
}
