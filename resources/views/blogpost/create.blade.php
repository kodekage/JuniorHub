@extends('layouts.app')

@section('content')
  <h1 class="margin-down">
    Create New Blog Post
  </h1>
  @include('includes.messages')
  <div class="">
    {!! Form::open(['action' => 'BlogPostsController@store', 'method' => 'POST']) !!}
      <div class="form-group">
        {{Form::label('title', 'Post Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Post title'])}}
      </div>
      {{-- <div class="form-group"> --}}
        {{-- {{Form::label('author', 'Post Author')}} --}}
        {{-- {{Form::text('author', '', ['class' => 'form-control', 'placeholder' => 'enter your name'])}} --}}
      {{-- </div> --}}
      <div class="form-group">
        {{Form::label('content', 'Post Content')}}
        {{Form::textarea('content', '', ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'tell your story here'])}}
      </div>
      <div class="form-group">
        {{Form::submit('Create Post', ['class' => 'btn btn-primary'])}}
      </div>
    {!! Form::close() !!}
  </div>
@endsection