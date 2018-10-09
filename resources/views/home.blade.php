@extends('layouts.app')

@section('content')
<div class="row">

	<div class="col-lg-3">
		<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
		    <div class="card-header text-center">Posted</div>
			<div class="card-body bg-light text-dark">
			    <h3 class="card-title text-center">{{$post_count}}</h3>
			</div>
		</div>
	</div>

	<div class="col-lg-3">
		<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
		    <div class="card-header text-center">Trashed</div>
			<div class="card-body bg-light text-dark">
			    <h3 class="card-title text-center">{{$trashed_count}}</h3>
			</div>
		</div>
	</div>

	<div class="col-lg-3">
		<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
		    <div class="card-header text-center">Users</div>
			<div class="card-body bg-light text-dark">
			    <h3 class="card-title text-center">{{$users_count}}</h3>
			</div>
		</div>
	</div>

	<div class="col-lg-3">
		<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
		    <div class="card-header text-center">Categories</div>
			<div class="card-body bg-light text-dark">
			    <h3 class="card-title text-center">{{$categories_count}}</h3>
			</div>
		</div>
	</div>

</div>
@endsection
