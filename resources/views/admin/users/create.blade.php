@extends('layouts.app')

@section('content')
	
	@if(count($errors)>0)
		<ul class="list-group">
			@foreach($errors->all() as $error)
				<li class="list_group-item text-danger">
					{{ $error }}
				</li>
			@endforeach
		</ul>
	@endif




	<div class="card-header">Create a new user</div>
		<div class="card-body">
			<form action="{{route('user.store')}}" method='post'>
				{{csrf_field()}}
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name='name' class="form-control">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name='email' class="form-control">
				</div>
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Add user</button>
					</div>
				</div>
				
			</form>
		</div>


@stop