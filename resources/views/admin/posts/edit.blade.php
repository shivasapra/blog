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




	<div class="card-header">Edit a post</div>
		<div class="card-body">
			<form action="{{route('post.update',['id'=>$post->id])}}" method='post' enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name='title' class="form-control" value="{{$post->title}}">
				</div>
				<div class="form-group">
				<label for="featured">Featured image</label>
				<input type="file" name="featured" class="form-control">
				</div>
				<div class="form-group">
				<label for="category_id">Category</label><br>
				<select name="category_id" class="form-control" id="category">
					@foreach( $categories as $category)
					 <option value="{{$category->id}}">{{$category->name}}</option>
					@endforeach
				</select>
				</div>
				<div class="form-group">
				<label for="content">Content</label>
				<textarea name="content" id="content" cols="5" rows="5" class="form-control">{{$post->content}}</textarea></div>
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Update post</button>
					</div>
				</div>
				
			</form>
		</div>


@stop