@extends('layouts.app')

@section('content')
	  <div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-2">
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
                <hr>
				<div class="card">
					<div class="card-header">
						Post By: {{ $post->user->name }}
					</div>
					<div class="card-body">
						<h2 class="card-title">{{ $post->title }}</h2>
						<p class="card-text">{{ $post->content }}</p>
					</div>
					<div class="card-header">
                    	<i>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</i>
                    	<div class="form-group row">
                     <form method="POST" action="{{ route('add.comment',['post_id' => $post->id]) }}">
                          @csrf

	                         <div class="form-group">
                                <textarea class="form-control" placeholder="Enter Comment"
                                    name="content"rows="3"></textarea>
                              </div>
                            <input type="submit" value="Post" class="btn btn-primary mb-2">
                            </form>
                        </div>
					</div>
				</div>
				<hr>
			</div>
		</div>



        <h2 class="header">
           Comments
        </h2>

		@foreach ($comments as $comment)
        <div class="card-body">
          <h5 class="card-title">{{$comment->user->name}}</h5>
          <h6 class="card-subtitle mb-2 text-muted"> {{$comment->created_at}} </h6>
          <p class="card-text"> {{$comment->content}} </p>
          <a href="{{ route('posts.show', ['id' => $post->id]) }}" class="card-link">View Profile</a>
          @if(auth()->id() == $comment->user->id)
          <a href="{{ route('edit.comment', ['id' => $comment->id])  }}" class="card-link">Edit</a>
          @endif
        </div>
        @endforeach


	  <div class="text-center" style="margin-left: 500px;margin-top: 20px;">
      	    {!! $comments->links(); !!}
          </div>
@endsection
