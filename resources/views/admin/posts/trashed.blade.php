@extends('layouts.app')
@section('content')
	
	<div class="card-header">Trashed Posts</div>
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
				@if($posts->count()>0)
					@foreach($posts as $post)
					<tr>
						<td>
							<img class="img-responsive menu-thumbnails" src="{{$post->featured}}" alt="{{$post->title}} " width="60px" height="60px"/>
						</td>
						<td>{{$post->title}}</td>
						<td>
							<a href="#" class="btn btn-sm btn-info">Edit</a>
							<a href="{{route('post.restore',['id' => $post->id])}}" class="btn btn-sm btn-success">Restore</a>
							<a href="{{route('post.kill',['id' => $post->id])}}" class="btn btn-danger btn-sm">Delete</a>
						</td>
					</tr>
					@endforeach
				@else
					<tr>
						<th colspan="5" class="text-center">No trashed posts!!</th>
					</tr>
				@endif
			</tbody>
		</table>

	</div>

@stop