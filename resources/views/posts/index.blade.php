@extends('layouts.app')

@section('content')
    <h1>Home Page <span class="badge badge-secondary">Welcome!</span></h1>
    @foreach ($posts as $post)

    <div class="card text-center">
      <div class="card-header">
        Posted by: {{$post->user->name}}
      </div>
      <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{ $post->content }}</p>
        <a href="{{ route('posts.show', ['id' => $post->id]) }}" class="btn btn-secondary" role="button">View Post</a>
      </div>
      <div class="card-footer text-muted">
        {{ date('M j, Y h:ia', strtotime($post->created_at)) }}
      </div>
    </div>
    @endforeach

    <div class="text-center" style="margin-left: 500px;margin-top: 20px;">
        {!! $posts->links(); !!}
    </div>

@endsection
