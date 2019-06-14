<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;
use App\User;
use App\Magazine;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('Admin');
        $this->middleware('auth');
    }
    public function index(){
        $channels = new Channel;
        $users = new User;
        $magazines = new Magazine;

        return view('admin.index', compact('channels', 'users', 'magazines'));
    }
}
