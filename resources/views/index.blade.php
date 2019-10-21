@extends('layouts.app')

@section('title', 'JuniorHub: Get to the senior rank with a few key strokes')

@section('content')
<section class="container margin-down index">
  <div class="row no-gutters align-items-center justify-content-center text-left">
    <div class="col">
      <h1 id="h1">{{config('app.name')}}</h1>
      <h2>Get to the senior rank with a few keystrokes</h2>
      <p class="text-bold">
        Quickly solidify your understanding of technical concepts by <br>
        writing about them and share with with developer community!
      </p>
      @guest
      <a href="/login" class="btn btn-dark">login</a>
      <a href="/register" class="btn btn-outline-dark">register</a>
      @endguest
    </div>
    <div class="col-8 col-sm-8 col-md-6 col-lg-6 col-xl-6">
      <img class="img-responsive img-fluid rounded hide" src="{{asset('images/bg.jpg')}}" alt="">
    </div>
  </div>
</section>

<div class="bg text-center container-fluid about-junior">
  <div class="margin-down">
    <h2 class="h1">How it works</h2>
  </div>
  <div class="container">
    <div class="row justify-content-center align-items-center text-left">
      <div class="col-lg-4">
        <img src="{{asset('images/profile.jpg')}}" alt="">
      </div>
      <div class="col-lg-4">
        <h3>01</h3>
        <h4>Set up your profile</h4>
        <p>Create a <strong>free</strong> account by signing up.
          setting up your account takes less than 20mins, add a cool
          profile picture, your technology stacks (your interest) and
          you're good to fly.
        </p>
      </div>
    </div>

    <div class="line"></div>

    <div class="row justify-content-center align-items-center text-left">
      <div class="col-lg-4">
        <img src="{{asset('images/idea.jpg')}}" alt="">
      </div>
      <div class="col-lg-4">
        <h3>02</h3>
        <h4>Learn't something new? <strong>WRITE IT!</strong></h4>
        <p>
          Our core believe as a community of junior devs is that writing is
          a means to solidifying knowlege and recommend that all juniors
          document their learning over time in form of blog posts.
        </p>
      </div>
    </div>

    <div class="line"></div>

    <div class="row justify-content-center align-items-center text-left">
      <div class="col-lg-4">
      <img src="{{asset('images/ju.jpg')}}" alt="">
      </div>
      <div class="col-lg-4">
        <h3>03</h3>
        <h4>Check the job board when you think you're ready</h4>
        <p>
          Our job boards is dedicated to sharing entry level job openings to
          help you start getting professional job experience on the go, while
          you still maintain the writers culture. Also you could choose to get
          job openings delivered to your mails too.
        </p>
      </div>
    </div>
    {{-- <div class="row justify-content-center align-items-center text-left"> --}}
      {{-- <div class="col-lg-4"> --}}
        {{-- <img src="{{asset('images/recruiters.jpg')}}" alt=""> --}}
      {{-- </div> --}}
      {{-- <div class="col-lg-4"> --}}
        {{-- <h4>4. Share your profile with recruiters</h4> --}}
        {{-- <p>Create a <strong>free</strong> account by signing up. --}}
          {{-- Set up your profile in less than 5 mins, some basic setup --}}
          {{-- will be to have a professional profile picture, your education. --}}
        {{-- </p> --}}
      {{-- </div> --}}
    {{-- </div> --}}
  </div>
</div>
<a href="#">
  <div class="up-arrow">
  &uparrow;
  </div>
</a>
@endsection