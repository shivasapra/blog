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




	<div class="card-header">Edit your profile</div>
		<div class="card-body">
			<form action="{{route('user.update')}}" method='post' enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name='name' value="{{$user->name}}" class="form-control">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name='email' value="{{$user->email}}" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">New Password</label>
					<input type="password" name='password' class="form-control">
				</div>
				<div class="form-group">
					<label for="avatar">Avatar</label>
					<input type="file" name='avatar' class="form-control">
				</div>
				<div class="form-group">
					<label for="facebook">Facebook</label>
					<input type="text" name='facebook' value="{{$user->profile->facebook}}" class="form-control">
				</div>
				<div class="form-group">
					<label for="youtube">Youtube</label>
					<input type="text" name='youtube' value="{{$user->profile->youtube}}" class="form-control">
				</div>
				<div class="form-group">
					<label for="about">About You</label>
					<textarea name="about" class="form-control" id="about" cols="6" rows="6">{{$user->profile->about}}</textarea>
				</div>
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Update Profile</button>
					</div>
				</div>
				
			</form>
		</div>


@stop