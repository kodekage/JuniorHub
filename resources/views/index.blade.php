@extends('layouts.app')

@section('content')
  <div class="row no-gutters align-items-center text-center">
    <div class="col">
      <h1 id="h1">{{config('app.name')}}</h1>
      <p>write your way to the senior rank</p>
      <a href="#" class="btn btn-dark">sign up</a>
      <a href="#" class="btn btn-outline-secondary">register</a>
    </div>
    <div class="col-8 col-sm-8 col-md-6 col-lg-6 col-xl-6">
      <img class="img-responsive img-fluid rounded" src="{{asset('images/senior.jpg')}}" alt="">
    </div>
  </div>
@endsection