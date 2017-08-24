@extends('layouts.main')

@section('content')

	
<div class="row">
  <div class="col-6 col-md-4"></div>
  <div class="col-6 col-md-4">
  <table class="table table-hover">
  	<h3>Cart Items</h3>
		<thead>
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>Total Price</th>
				<th>Qty</th>
				<th>size</th>
			</tr>
		</thead>
		<tbody>
			@foreach($cartItems as $cartItem)
				<tr>
					<td>{{$cartItem->name}}</td>
					<td>{{$cartItem->price}}</td>
					<td>{{$cartItem->price * $cartItem->qty}}</td>
					<td width="50px">
					
						{!! Form::open(['route' => ['cart.update',$cartItem->rowId],'method' => 'PUT']) !!}
							<input name="qty" type="text" value="{{$cartItem->qty}}">
							<input type="submit" class="btn btn-sm btn-default" value="ok">
						{!! Form::close() !!}
					</td>
					<td>{{$cartItem->options->has('size')?$cartItem->options->size:''}}</td>

				</tr>
			@endforeach
			<tr>
				<td></td>
				<td></td>
				<td>Grand Total:Rp.{{Cart::total()}}</td>
				<td>Items:{{Cart::count()}}</td>

			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><a href="" class="button">Default Button</a></td>		
			</tr>
		</tbody>
	</table></div>
  <div class="col-6 col-md-4"></div>
</div>

	


@endsection