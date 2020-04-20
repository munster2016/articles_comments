@extends('layouts.app')

@section('content')

    {{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">--}}


    <div style="width: 30%">
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
        <div class="alert alert-primary" role="alert">
            Comments
        </div>
        <div>
            @foreach($comments as $comment)
                <div class="alert alert-success" role="alert">
                    {{$comment->text}}
                </div>
            @endforeach

        </div>
    </div>
    <p style="color: red">If you want add the comment, please sign.</p>
    {{--<button><a href="#">add comment</a></button>--}}
    {{--<button><a href="#">edit comment</a></button>--}}
    {{--<button><a href="#">delete comment</a></button>--}}

@endsection






