@extends('layouts.app')

@section('content')
<section class="container">
  <div class="margin-down jumbotron">
    @include('includes.messages')
    @if($blogpost)
    <h1>
      {{$blogpost->title}}
    </h1>
    <span>
      <strong>Date:</strong> {{$blogpost->updated_at}} <strong>Author:</strong> {{$blogpost->author}}
    </span>

    <div>
      {!!$blogpost->blogBody!!}
    </div>
    @endif

    <a href="/blogpost">
    <button class="btn btn-primary margin-down">
      back
    </button>
    </a>
    @if(!Auth::guest())
      @if(Auth::user()->id === $blogpost->user_id)
        <a href="/blogpost/{{$blogpost->id}}/edit">
          <button class="btn btn-success margin-down">
            edit post
          </button>
        </a>
        {!! Form::open(['action' => ['BlogPostsController@destroy', $blogpost->id], 'method' => 'POST', 'class' => 'float-right']) !!}
          {{Form::hidden('_method', 'DELETE')}}
          {{Form::submit('delete post', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
      @endif
    @endif
  </div>
</section>
@endsection