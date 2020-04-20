<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function create($articleId)
    {
        return view('formAddComment',compact('articleId'));
    }

    public function store(Request $request)
    {
        $articleId = $request->articleId;
        $comments = Article::find($articleId)->comments;
        Comment::create([
            'name' => $request->name,
            'article_id' => $request->articleId,
            'text' => $request->text,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('articles.show', compact('articleId', 'comments'))->with('status', 'Your comment was added.');
    }

    public function show()
    {
        return view('formAddComment');
    }

    public function destroy($commentId)
    {

        //who can delete the comment
        $article = Comment::find($commentId)->article()->first()->id;
        $comment = Comment::find($commentId);
        if($comment) {
            Comment::destroy($commentId);
        }
        $comments = Article::find($article)->comments;
        return redirect()->route('articles.show', compact('article', 'comments'));
    }
}
