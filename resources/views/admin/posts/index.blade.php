@extends('layouts.app')
@section('content')
	
	<div class="card-header">Posts</div>
	<div class="card-body">
		
		<table class="table table-hover">
			<thead>
				<th>
					Image
				</th>
				<th>
					Title
				</th>
				<th>
					Action
				</th>
			</thead>
			<tbody>
				@foreach($posts as $post)
				<tr>
					<td>
						<img class="img-responsive menu-thumbnails" src="{{$post->featured}}" alt="{{$post->title}} " width="60px" height="60px"/>
					</td>
					<td>{{$post->title}}</td>
					<td>
						<a href="#" class="btn btn-sm btn-info">Edit</a>
						<a href="{{route('post.delete',['id' => $post->id])}}" class="btn btn-sm btn-danger">Trash</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>

@stop