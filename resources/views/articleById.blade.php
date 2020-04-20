@extends('layouts.app')

@section('content')

{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">--}}


<div style="width: 30%; margin: auto" >
    <h2 style="color: red">choosen article</h2>
    <div class="alert alert-primary" role="alert">
        Name of article
    </div>
    <div class="alert alert-light" role="alert">
        {{$article->name}}
    </div>
    <div class="alert alert-primary" role="alert">
        Text of article
    </div>
    <div class="alert alert-light" role="alert">
        {{$article->text}}
    </div>
    <a href="{{ route('article.edit', $article->id) }}"><img src="/storage/images/edit.png" alt="" width="20px" height="20px"title="edit article"></a>
{{--    <a href="#"><img src="/storage/images/update.png" alt="" width="20px" height="20px"title="update article"></a>--}}
    <div class="alert alert-primary" role="alert">
        Comments
    </div>
    <div>
        @foreach($comments as $comment)
        <div class="alert alert-success" role="alert">
            {{$comment->text}}
            <a href="{{ route('comments.destroy', $comment->id) }}"><img src="/storage/images/delete.png" alt="" width="20px" height="20px"title="delete article"></a>
        </div>
        @endforeach

    </div>


@if (session('status'))
       <p style="color: navy"> {{ session('status') }} </p>
@endif

{{--    <a href="#"><img src="/storage/images/edit.png" alt="" width="20px" height="20px"title="edit article"></a>--}}
{{--    <a href="#"><img src="/storage/images/delete.png" alt="" width="20px" height="20px"title="delete article"></a>--}}
{{--    <a href="#"><img src="/storage/images/add.png" alt="" width="20px" height="20px" title="add article"></a>--}}
{{--    <a href="#"><img src="/storage/images/update.png" alt="" width="20px" height="20px"title="update article"></a>--}}
    <button><a href="{{ route('comments.create', $article->id) }}">add comment</a></button>
{{--    <button><a href="{{ route('comments.destroy', $comment->id) }}">delete comment</a></button>--}}
</div>
@endsection





