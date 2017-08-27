@extends('layouts.main')

@section('content')
	<br>
	
	<div class="row">
		<div class="small-6 small-centered columns">
		<h3>Shipping Info</h3>
			{!! Form::open(['route' => 'checkout.shipping', 'method' => 'post']) !!}

			<div class="form-group">
				{{ form::label('addressline', 'Adress Line')}}
				{{ form::text('addressline', null, array('class' => 'form-control'))}}
			</div>

			<div class="form-group">
				{{ form::label('city', 'City')}}
				{{ form::text('city', null, array('class' => 'form-control'))}}
			</div>

			<div class="form-group">
				{{ form::label('state', 'State')}}
				{{ form::text('state', null, array('class' => 'form-control'))}}
			</div>

			<div class="form-group">
				{{ form::label('zip', ' Zip')}}
				{{ form::text('zip', null, array('class' => 'form-control'))}}
			</div>

			<div class="form-group">
				{{ form::label('country', 'Country')}}
				{{ form::text('country', null, array('class' => 'form-control'))}}
			</div>

			<div class="form-group">
				{{ form::label('phone', 'Phone')}}
				{{ form::text('phone', null, array('class' => 'form-control'))}}
			</div>

			{{ form::submit('Proceed to checkout', array('class'=>'button success'))}}
			{!! form::close() !!}
		</div>
	</div>

@endsection