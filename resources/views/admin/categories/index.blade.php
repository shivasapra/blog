@extends('layouts.app')
@section('content')
	
	<div class="card-header">Categories</div>
	<div class="card-body">
		
		<table class="table table-hover">
			<thead>
				<th>
					Category Name
				</th>
				<th>
					Action
				</th>
			</thead>
			<tbody>
				@foreach($categories as $category)
				<tr>
					<td>
						{{ $category->name }}
					</td>
					<td>
						<a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-xs btn-info">Edit</a>
						<a href="{{route('category.delete',['id'=>$category->id])}}" class="btn btn-xs btn-danger">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>

@stop