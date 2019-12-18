@extends('layouts.app')
@section('title', 'Create Post')


@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-2">
				<h1>Create a new post</h1>
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

				<form method="POST" action="{{ route('add.post') }}">
					@csrf
					<div class="form-group">
						<label for="title">Post Title:</label>
						<input type="input" type="text" class="form-control" name="title"
                            value="{{ old('title') }}">
					</div>

					<div class="form-group">
						<label for="content">Post Content:</label>
						<textarea class="form-control" name="content" rows="5"
                            value="{{ old('content') }}"></textarea>
					</div>
					<input type="submit" value="Create!" class="btn btn-primary btn-lg btn-block">
				</form>
			</div>
		</div>
	  </div>
@endsection
