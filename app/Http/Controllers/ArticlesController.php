<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateArticleRequest;
use App\Article;
use Illuminate\Support\Facades\Auth;
use App\Magazine;
use App\Category;
use App\Comment;

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
        return view('articles.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($magazine_id)
    {
        //
        $categories = Category::all();
        $channel_id = Magazine::findOrFail($magazine_id)->channel_id;
        return view('articles.create', compact('magazine_id','channel_id', 'categories'));
    }
    public function createArticle(){
        $categories = Category::all();
        $magazine_id = 0;
        $channel_id = 0;
        return view('articles.create', compact('magazine_id','channel_id', 'categories'));
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
       
      
        //If user is admin it will be autmatically active
        if(Auth::check())
           {
            $user = Auth::user();
            $article->user_id = $user->id;
            auth()->user()->is_admin == 1 ? $article->is_active = 1 : $article->is_active = 0;
            }
            else
            {
                $article->user_id = 0;
            }
        if($request->magazine_id == 0){
            $article->is_active = 0;
        }
        //Assign the rest of information
        $article->article_title = $request->article_title;
        $article->article_content = $request->article_content;
        $article->category_id = $request->category_id;
        $article->save();

        if($request->magazine_id != 0){
            return redirect('/articles/'. $article->id .'/photos')->with('success','تم اضافة المقالة بنجاح.');
        }
        return redirect()->route('photos.create', ['article_id'=>$article->id])->with('success','تم اضافة المقالة بنجاح.');
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
        $comments = $article->comments()->where('is_active',1)->orderBy('created_at', 'desc')->get();
        $article->views > 0 ? $article->views++ : $article->views = 1;
        $article->save();
        
        if($article->is_active != 1){
            return redirect('/');
        }
        return view('articles.show', compact('article', 'comments'));
    }

    public function show_archives($year, $month)
    {
       
        $archives = Article::whereYear('created_at', '=', $year)
              ->whereMonth('created_at', '=', $month)
              ->get();


            
        return view('archives.index',compact('archives'));


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
