@extends('layouts.app')

@section('content')
    {{-- {{$user->name}} --}}
    <div class="container-fluid margin-down">
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

            <div class="col-lg-8 ">
                <div class="row align-items-center justify-content-between profile-tab">
                    <div class="col">
                        Overiview
                    </div>
                    <div class="col">
                        Projects
                    </div>
                    <div class="col">
                        Posts <mark class="round-fig">  {{count($user->blogpost)}}</mark>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection