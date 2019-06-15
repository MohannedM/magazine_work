<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateArticleRequest;
use App\Article;
use Illuminate\Support\Facades\Auth;
use App\Magazine;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::where('is_active', '1')->get();
        return view('articles.index')->with('articles');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($magazine_id)
    {
        //
        $channel_id = Magazine::findOrFail($magazine_id)->channel_id;
        return view('articles.create', compact('magazine_id','channel_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateArticleRequest $request)
    {
        //
        $article = new Article;
         //Asigning the uploaded image to a variable
         $file = $request->article_cover;
         //Asigining the image a new name
         $cover_name = time() . $file->getClientOriginalName();
         //Moving image to images folder and saving in database
         $file->move('images', $cover_name);
         $article->article_cover = $cover_name;
        // check if the request has a magazine id
        $request->magazine_id ? $article->magazine_id = $request->magazine_id : $article->magazine_id = 0;
        //Check if user is logged in
        $user = Auth::user();
        $user ? $article->user_id = $user->id : $article->user_id = 0;
        //Assign the rest of information
        $article->article_title = $request->article_title;
        $article->article_content = $request->article_content;
        $article->save();
        if($request->magazine_id != 0){
            return redirect('channels/'. $request->channel_id .'/magazines/'.$request->magazine_id);
        }
        return redirect('/');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($magazine_id,$id)
    {
        //
        $article = Article::findOrFail($id);
        if($article->is_active != 1){
            return redirect('/');
        }
        return view('articles.show')->with('article', $article);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
