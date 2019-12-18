@extends('layouts.app')



@section('content')
    <div class="container">
    <div class="col-md-12 col-md-offset-2">
       <h1>Edit Post</h1>
       <hr>
        @if ($errors->any())
        <div>
            Errors:
            <ul>
            @foreach ($errors->all() as $error)
            	    <div class="text-danger"><li>{{ $error }}</li></div>
            @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{ route('update.comment', ['id' => $comment->id])}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <textarea name="content" class="form-control" aria-label="Content" >{{$comment->content}}</textarea>
            <div>
                <input type="submit" value="Edit Comment" class="btn btn-primary btn-lg btn-block">
                </form>
            </div>
            </div>
    </div>
@endsection
