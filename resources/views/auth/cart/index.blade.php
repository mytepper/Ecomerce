@extends('layout.main')

@section('content')

	<h3>Cart Items</h3>
	
	<table class="table table-hover">

		<thead>
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>Qty</th>
				<th>size</th>
			</tr>
		</thead>
		<tbody>
			@foreach($cartItems as $cartItems)
				<tr>
					<td>{{$cartItems->name}}</td>
					<td>{{$cartItems->price}}</td>
					<td>{{$cartItems->qty}}</td>
					<td>{{$cartItems->options->has('size')?$cartItem->option->size:''}}</td>

				</tr>
		</tbody>
		
	</table>

@endsection