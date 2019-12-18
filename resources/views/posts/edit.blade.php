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
        <form method="POST" action="{{ route('update.post', ['id' => $post->id])}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <h1>Title</h1>
                <input name="title" class="form-control" value='{{$post->title}}' ></input>
            </div>
                <h2>Post Content</h2>
                <textarea name="content" class="form-control" aria-label="Content">{{$post->content}}</textarea>
            <div>
                <input type="submit" value="Edit Post" class="btn btn-primary btn-lg btn-block">

            </form>
            </div>
            </div>

    </div>
@endsection
