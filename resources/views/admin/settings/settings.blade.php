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




	<div class="card-header">Edit Blog Settings</div>
		<div class="card-body">
			<form action="{{route('settings.update')}}" method='post'>
				{{csrf_field()}}
				<div class="form-group">
					<label for="name">Site name</label>
					<input type="text" name='site_name' value="{{$settings->site_name}}" class="form-control">
				</div>
				<div class="form-group">
					<label for="contact_number">Contact Number</label>
					<input type="text" name='contact_number' class="form-control" value="{{$settings->contact_number}}">
				</div>
				<div class="form-group">
					<label for="contact_email">Contact Email</label>
					<input type="email" name='contact_email' class="form-control" value="{{$settings->contact_email}}">
				</div>
				<div class="form-group">
					<label for="address">Address</label>
					<input type="text" name='address' class="form-control" value="{{$settings->address}}">
				</div>
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Update Settings</button>
					</div>
				</div>
				
			</form>
		</div>


@stop