@extends('layouts.app')

@section('content')
  <section class="container margin-down">
    <div class="row align-items-center juniors justify-content-left">
      @foreach ($users as $user)
      <div class="col-lg-4 margin-down">
        <div class="card text-center">
          {{-- <div class="card-header bg-light"> --}}
          <a href="/juniors/{{$user->id}}/#/overview">
          <img src="{{asset("storage/profile_pictures/$user->profile_picture")}}" alt="{{$user->name}} photo">
            </a>
          {{-- </div> --}}
          <div class="card-body font-dark">
          <a href="/juniors/{{$user->id}}/#/overview">
              <h2>
                {{ $user->name}}
              </h2>
            </a>
            <p>
              <strong>Joined: {{$user->created_at}}</strong>
            </p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>
@endsection