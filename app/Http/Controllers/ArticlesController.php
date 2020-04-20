<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formAddArticle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $article = Article::updateOrCreate(
           [
               'user_id' => Auth::user()->id,
               'name' => $request->name,
               'text' => $request->text,

           ]
       );
       return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($articleId)
    {
        $article = Article::find($articleId);
        $comments = Article::find($articleId)->comments;
        //$user = Article::find($articleId)->user;
        //dump($user);
        //dump($comments);
        //dump($article);

        return view('articleById', compact('comments', 'article'));
    }

    public function showOff($articleId)
    {
        $article = Article::find($articleId);
        $comments = Article::find($articleId)->comments;
        //$user = Article::find($articleId)->user;
        //dump($user);
        //dump($comments);
        //dump($article);

        return view('articleByIdOff', compact('comments', 'article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($articleId)
    {
        $article = Article::find($articleId);

        return view('formEditArticle', compact('article', 'articleId'));
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
        $article = Article::findOrFail($id);

//        if(Gate::denies('update-article', $article)) {
//            abort(403);
//        }
        echo 'ok.can update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::destroy($id);

        return redirect()->back();
    }
}
