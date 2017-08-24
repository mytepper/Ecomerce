@extends('layouts.main')

@section('content')

	
<div class="row">
  <div class="col-6 col-md-4"></div>
  <div class="col-6 col-md-4">
  <table class="table table-bordered">
  	<h3>Cart Items</h3>
		<thead class="thead-inverse">
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>Total Price</th>
				<th>Qty</th>
				<th>Size</th>
				<th>Action</th>
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
					<td>
						<form action="{{route('cart.destroy',$cartItem->rowId)}}" method="POST">
							{{csrf_field()}}
							{{method_field('DELETE')}}
							<input class="button" type="submit" value="delete">
						</form>
					</td>

				</tr>
			@endforeach
			<tr>
				<td></td>
				<td></td>
				<td>
					TAX			:Rp.{{Cart::tax()}}<br>
					Sub Total	:Rp.{{Cart::subtotal()}}<br>
					Grand Total	:Rp.{{Cart::total()}}
				</td>
				<td>Items:{{Cart::count()}}</td>

			</tr>
			
		</tbody>
	</table>
	<a href="" class="button" >Default Button</a>
	</div>
  <div class="col-6 col-md-4"></div>
</div>

	


@endsection