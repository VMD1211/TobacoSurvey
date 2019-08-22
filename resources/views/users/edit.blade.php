@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Edit User</h2><br  />
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <form method="post" action="{{action('UsersController@update', $id)}}">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="username">Name:</label>
                    <input type="text" class="form-control" name="username" value="{{$user->username}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" value="{{$user->email}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="us_firstname">First Name</label>
                    <input type="text" class="form-control" name="us_firstname" value="{{$user->us_firstname}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="us_firstname">Last Name</label>
                    <input type="text" class="form-control" name="us_lastname" value="{{$user->us_lastname}}">
                </div>
            </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update User</button>
        </div>
    </div>
    </form>
    </div>
@endsection