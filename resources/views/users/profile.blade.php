@extends('layouts.app')

@section('content')
    {{-- {{$user->name}} --}}
    <div id="root" class="container-fluid margin-down">
        <div class="row justify-content-around">
            <div class="col-lg-3">
                <div class="text-center profile-image">
                    <img src="{{asset("storage/profile_pictures/$user->profile_picture")}}" alt="">
                    <div class="card-header font-dark text-center">
                        <div>
                            {{-- <h4>@_{{$user->name}} </h4> --}}
                            <h2>{{$user->full_name}}</h2>
                            <span>{{$user->name}}</span>
                            {{-- <p>{{$user->email}}</p> --}}
                        </div>
                    </div>
                    {{-- <div class="card-body"> --}}
                        {{-- <a href="/profile/{{$user->id}}" class="btn btn-full btn-dark">edit profile</a> --}}
                    {{-- </div> --}}
                </div>
            </div>

        <profile-board title="{{ count($user->blogpost) }}"></profile-board>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
@endsection