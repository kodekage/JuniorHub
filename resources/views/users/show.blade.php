{{-- @extends('layouts.app')

@section('content')
  <div class="container margin-down">
    <div class="row align-items-center justify-content-center user">
      <div class="col-lg-3 user-img">
      <img src="{{asset("storage/profile_pictures/$user->profile_picture")}}" alt="{{$user->name}} image">
      </div>

      <div class="col-lg-3">
        <h2 class="h1">
          {{$user->name}}
        </h2>
      </div>

      <div class="col-lg-3 user-details">
        <h3>
          <strong>Joined:</strong><br>
          {{$user->created_at}}
        </h3>

        <h3>
          <strong>Email:</strong><br>
          {{$user->email}}
        </h3>
      </div>
    </div>
  </div>

  @if(count($user->blogpost) > 0)
    @foreach ($user->blogpost as $post)
      <div class="user-articles bg-light">
        <div class="row justify-content-between align-items-start">
          <div class="col">
            <a href="/blogpost/{{$post->id}}">
              <h2> {{$post->title}} </h2>
            </a>
            <p> author: {{$post->author}} created: {{$post->created_at}}</p>
          </div>
        </div>
      </div>
    @endforeach
  @else
    <div class="container text-center margin-down">
      <h2>
        No Post
      </h2>
    </div>
  @endif
  
  <div class="container margin-down text-center">
    <a href="/juniors" class="btn btn-dark">back</a>
  </div>
@endsection --}}