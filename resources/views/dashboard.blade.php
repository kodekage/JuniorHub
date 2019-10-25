@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark">Welcome to your dashboard {{Auth::user()->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/blogpost/create">
                        <button class="btn btn-success">
                            Create New Post
                        </button>
                    </a>
                </div>

                <div class="card-body">
                    @if(count($posts) > 0)
                        @foreach($posts as $post)
                            <div>
                                <a href="/blogpost/{{$post->id}}">
                                    {{$post->title}}
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
