@extends('layouts.main')
@section('title','books')
@section('content')

<div class="row">
   @forelse($books as $book)
    <div class="small-4 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a href="{{route('cart.addItem',$book->id)}}" class="button expanded add-to-cart">
                    Add to Cart
                </a>
                <a href="#">
                    <img src="{{url('images',$book->image)}}"/>
                </a>
            </div>
            <a href="{{route('book')}}">
                <h3>
                   {{$book->name}}
                </h3>
            </a>
            <h5>
                 Rp.{{$book->price}}
            </h5>
            <p>
                 {{$book->description}}
            </p>
        </div></div>
    @empty
    <h3>No Book<h3>
    @endforelse
</div>
@endsection
