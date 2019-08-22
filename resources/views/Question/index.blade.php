@extends('layouts.master')

@section('content')
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <form method="POST" action="{{url('answerofinterview')}}">
                            <div class="card-header">Hello {{ Auth::user()->username }}, your ID: {{Auth::user()->id}}</div>
                            <div class="card-body">
                                @foreach($question as $questions)
                                    {{$questions->que_di_content}}
                                <br>
                                    <input type="text" name="ans_content" value="{{ old('ans_content') }}" required>
                                @endforeach
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{'Submit'}}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
@endsection