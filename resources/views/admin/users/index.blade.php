@extends('layouts.app')
@section('content')
	
	<div class="card-header">Users</div>
	<div class="card-body">
		
		<table class="table table-hover">
			<thead>
				<th>
					Image
				</th>
				<th>
					Name
				</th>
				<th>
					Permissions
				</th>
				<th>
					Delete
				</th>
			</thead>
			<tbody>
				@if($users->count()>0)
					@foreach($users as $user)
						<tr>
							<td>
								{{$user->profile->avatar}}
							</td>
							<td>
								{{$user->name}}
							</td>
							<td>
								@if($user->admin)
									<a href="{{route('user.not.admin',['id'=> $user->id])}}" class="btn btn-danger btn-sm">Remove Permissions</a>
								@else
									<a href="{{route('user.admin',['id'=> $user->id])}}" class="btn btn-success btn-sm">Make Admin</a>
								@endif
							</td>
							<td>
								Delete
							</td>
						</tr>
					@endforeach
				@else
					<tr>
						<th colspan="5" class="text-center">No Users!!</th>
					</tr>
				@endif
			</tbody>
		</table>

	</div>

@stop