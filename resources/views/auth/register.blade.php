@extends('layouts.app')

@section('content')
<div class="container margin-down">
    <div class="row justify-content-center align-items-center">
        <div class="col-8 col-lg-6 hide">
            <img src="{{asset('images/profile.jpg')}}" alt="">
        </div>

        <div class="col-lg-4 text-left">
            <div class="card">
                <div class="card-header bg-dark">
                    <h1>{{ __('Register') }}</h1>
                </div>

                <div class="card-body">
                    <form class="form-group text-left" method="POST" action="{{ route('register') }}">
                        @csrf

                            <div class="form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password (8 characters minimum)">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                            </div>
                        
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
