@extends('layouts.app')
@section('content')
<h2 style="text-align: center">Add new comment</h2>
<form style="width: 30%; margin:auto" action="{{ route('comments.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="w">Enter you name</label>
        <input type="text" class="form-control" id="w" placeholder="name" name="name">
    </div>
    <input type="hidden" name="articleId"  value="{{$articleId}}">
    <div class="form-group">
        <label for="qw">Enter your comment</label>
        <textarea class="form-control" id="qw" rows="3" name="text"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Send</button>
</form>
@endsection
