@extends('layouts.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Answer of interviewer</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>
                                ID Question
                            </th>
                            <th>
                                Content
                            </th>
                            <th>
                                ID User
                            </th>
                        </tr>
                        </thead>
                            @foreach($answer as $answer)
                                <tr>
                                    <td>
                                        {{$answer->ans_name}}
                                    </td>
                                    <td>
                                        {{$answer->ans_content}}
                                    </td>
                                    <td>
                                        {{$answer->int_id}}
                                    </td>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection