@extends('layouts.app')
@section('content')


    <h2 style="text-align: center">Edit article <span style="color: red">{{$article->name}}</span></h2>
    <form style="width: 30%; margin:auto" action="{{ route('articles.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="w">Enter name of article</label>
            <input type="text" class="form-control" id="w" value="{{$article->name}}" name="name">
        </div>
        <div class="form-group">
            <label for="w">Enter text</label>
            <input type="text" class="form-control" id="w" value="{{$article->text}}" name="text">
        </div>
        <input type="hidden" name="articleId"  value="{{$articleId}}">
        {{--        <div class="form-group">--}}
        {{--            <label for="qw">Enter your comment</label>--}}
        {{--            <textarea class="form-control" id="qw" rows="3" name="text"></textarea>--}}
        {{--        </div>--}}
        <button type="submit" class="btn btn-primary mb-2">Save</button>
    </form>
@endsection
