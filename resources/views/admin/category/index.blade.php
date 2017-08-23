@extends('admin.layout.admin')

@section('content')
	<div class="navbar">
		<a class="navbar-brand" href="#">Categories</a>
		<ul class="nav navbar-nav">
			@if(!empty($categories))
				@forelse($categories as $category)
					<li>
						<a href="#">{{$category->name}}</a>
					</li>
					@empty
					<li>No Data</li>
				@endforelse
			@endif
		</ul>

		<a class="btn btn-primary" data-toggle="modal" href="#modal">Add Category</a>
		<div class="modal fade" id="modal-id">
			<div>
				<div class="modal-dialog">
					{!! Form::open(['route' => 'category.store','method' =>'post'])!!}
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class=" modal-title">Add Category</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								{{ Form::label('name','Name')}}
								{{ Form::text('name', null, array('class' => 'form-control'))}}
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection