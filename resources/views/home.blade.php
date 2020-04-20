
@extends('layouts.app')
@section('content')

    <?php $articles= App\Article::all(); ?>
    <?php //$comments= App\Comment::all(); ?>
<div class="content">

        <div style="float: left;margin-left: 50px">
            <div>
                <img
                    src="/storage/images/fon.JPG"
                    alt="" width="1440px" height="800px">
            </div>
            <div class="links">
                <a href="https://laravel.com/docs">Docs</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
        <div style="float: right;margin-right: 115px">
            <p style="color: #005cbf">Name of article:</p>
            @foreach($articles as $article)
                <div>
                    <a href="{{ route('articles.destroy', $article->id) }}"><img src="/storage/images/delete.png" alt="" width="20px" height="20px"title="delete article"></a>
                    <span style="margin-right: 30px"></span>
                    <a href="{{ route('articles.show', $article->id) }}">{{$article->name}}</a>
                </div>
            @endforeach
            <br><a href={{ route('articles.create') }}><img src="/storage/images/add.png" alt="" width="20px" height="20px" title="add article">add article</a>
            <p></p>
        </div>

</div>
@endsection

