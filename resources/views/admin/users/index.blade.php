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
								Permissions
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