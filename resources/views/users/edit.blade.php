@extends('layouts.app')

@section('content')
  <div class="container margin-down">
      {{-- <img src="storage/profile_pictures/{{$user->profile_image}}" alt=""> --}}
      
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-6">
          @include('includes.messages')
        {!! Form::open(['action' => ['UsersController@update', $user->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
          <div class="form-group">
            {{-- {{Form::label('content', 'Post Content')}} --}}
            {{Form::file('profile_picture', ['value' => $user->profile_picture])}}
          </div>
          <div class="form-group">
            {{-- {{Form::label('username', 'Post Title')}} --}}
            {{Form::text('username', $user->name, ['class' => 'form-control', 'placeholder' => 'enter new username'])}}
          </div>
          <div class="form-group">
              {{-- {{Form::label('username', 'Post Title')}} --}}
              {{Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'enter new email'])}}
            </div>
          <div class="form-group">
            {{Form::text('fullName', $user->full_name, ['class' => 'form-control', 'placeholder' => 'enter your fullname'])}}
          </div>
          <div class="form-group">
            {{Form::text('githubUsername', $user->github_url, ['class' => 'form-control', 'placeholder' => 'github profile url'])}}
          </div>
          {{Form::hidden('_method', 'PUT')}}
          <div class="form-group">
            {{Form::submit('save', ['class' => 'btn btn-primary'])}}

            <a href="/profile" class="btn btn-danger">cancel</a>
          </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection