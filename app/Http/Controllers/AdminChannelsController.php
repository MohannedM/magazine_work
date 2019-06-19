<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;

class AdminChannelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Admin');
    }
    public function index()
    {
        //
        $channels = Channel::all();
        return view('admin.channels.index')->with('channels', $channels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $channel = Channel::findOrFail($id);
        //Check its status and reverse it
        $channel->is_active == 0 ? $channel->is_active = 1 : $channel->is_active = 0;
        $channel->save();
        return redirect('/admin/channels');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // //Find the channel
        // $channel = Channel::findOrFail($id);
        // //Find its magazines 
        // $magazines = $channel->magazines()->get();
        // // delete the magazines' articles
        // foreach($magazines as $magazine){
        //     //find the magazines' articles
        //     $articles = $magazine->articles()->get();
        //     foreach($articles as $article){
        //         //Find the article comments
        //         $comments = $article->comments()->get();
        //         foreach($comments as $comment){
        //         //finding comments' replies and deleting them
        //         $comment->replies()->delete();
        //         }
        //         //Deleting articles' comments
        //         $article->comments()->delete();
        //     }
        //     //Delete the magazine articles
        //     $magazine->articles()->delete();
        // }
        // //Delete the magazines 
        // $channel->magazines()->delete();
        // //Delete the whole channel
                // $channel->delete();
        //
        Channel::findOrFail($id)->delete();
        return redirect('/admin/channels');
    }
}
