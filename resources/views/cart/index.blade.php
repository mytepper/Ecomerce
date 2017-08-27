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
							
						
					</td>
					<td>
						<div> 
							{!! Form::select('size', ['small'=>'Small','medium'=>'Medium','large'=>'Large'] , $cartItem->options->has('size')?$cartItem->options->size:'' ) !!}
                        </div>
					</td>
						
					<td>
						<input style="float: left;" type="submit" class="button success small" value="Ok">
						{!! Form::close() !!}
						<form action="{{route('cart.destroy',$cartItem->rowId)}}" method="POST">
							{{csrf_field()}}
							{{method_field('DELETE')}}
							<input class="button small alert" type="submit" value="delete">
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
	<a href="{{url('/checkout')}}" class="button" >Checkout</a>
	</div>
  <div class="col-6 col-md-4"></div>
</div>

	


@endsection