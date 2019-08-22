@extends('layouts.master')

@section('content')
  	<div class="row">
      	<div class="col-md-12">
        	<div class="card">
        		<div class="card-header">
	                <h3 class="card-title">Hello {{Auth::user()->username}}</h3>
              	</div>
              	<!-- /.card-header -->
              	<div class="card-body">
              		<table class="table table-bordered">
	                  	<thead>
	                  		<tr>
	                			<th>
	                				Username
	                			</th>
	                			<th>
	                				Email
	                			</th>
	                			<th>
	                				Action
	                			</th>
                			</tr>
                		</thead>
                			@foreach($users as $key => $user)
                			<tr>
                				<td>
                					{{$user->username}}
                				</td>
                				<td>
                					{{$user->email}}
                				</td>
                				<td>
									@if(Auth::user()->us_role == '1')
										@auth
										<a href="{{action('UsersController@edit', $user->id) }}" class="btn btn-warning">
											<span class="table__icon text-yellow "  data-value="{{ $user->id }}">
												Edit
											</span>
										</a>
                                        <a>
                                            <form action="{{action('UsersController@destroy', $user->id)}}" method="post">
                                                {{csrf_field()}}
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </a>
                                        @endauth
									@endif
                				</td>
                			</tr>
                			@endforeach
	                </table>
                    <a href="users/create" class="btn btn-success">
						Create New
                    </a>
              	</div>
        	</div>
      	</div>
    </div>
@endsection
