@extends('layouts.master')

@section('content')
    @if(Route::has('login'))
    <div class="container">
        @auth
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p>ID: {{Auth::user()->id}}</p>
                        <p>Name: {{Auth::user()->username}}</p>
                            <a href="{{action('UsersController@edit', Auth::user()->id)}}"class="btn btn-success">
                                <span>
                                    Edit
                                </span>
                            </a>
                    </div>
                </div>
            </div>
        </div>
        @else
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Dashboard</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            You are not logged in!
                        </div>
                    </div>
                </div>
            </div>
        @endauth
    </div>
    @endif
@endsection
