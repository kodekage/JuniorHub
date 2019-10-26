@extends('layouts.app')

@section('content')
    {{-- {{$user->name}} --}}
    <div id="root" class="container-fluid margin-down">
        <div class="row justify-content-around">
            <profile-detail image="{{ asset("storage/profile_pictures/$user->profile_picture") }}" user="{{ $user }}"></profile-detail>
        <profile-board post="{{ $user->blogpost }}" user="{{ $user }}"></profile-board>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
@endsection