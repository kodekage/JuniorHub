@extends('layouts.app')

@section('content')
  <h1 class="margin-down">
    Edit Post
  </h1>
  @include('includes.messages')
  <div class="">
    {!! Form::open(['action' => ['BlogPostsController@update', $post->id], 'method' => 'POST']) !!}
      <div class="form-group">
        {{Form::label('title', 'Post Title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Post title'])}}
      </div>
      <div class="form-group">
        {{Form::label('content', 'Post Content')}}
        {{Form::textarea('content', $post->blogBody, ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'tell your story here'])}}
      </div>
      {{Form::hidden('_method', 'PUT')}}
      <div class="form-group">
        {{Form::submit('Update Post', ['class' => 'btn btn-primary'])}}
      </div>
    {!! Form::close() !!}
  </div>
@endsection