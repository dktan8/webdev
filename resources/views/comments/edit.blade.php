@extends('layouts.app')



@section('content')
    <div class="container">
        <form method="POST" action="{{ route('update.comment', ['id' => $comment->id])}}">
            @csrf

            @method('PUT')
            <div class="form-group">

                <textarea type="content" class="form-control" aria-label="Content" aria-describedby="basic-addon2">{{$comment->content}}</textarea>
            <div>
                <input type="submit" value="Edit Comment" class="btn btn-primary btn-lg btn-block">
            </div>
            </div>
        </form>
    </div>
@endsection
