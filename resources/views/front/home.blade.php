@extends('layouts.main')

@section('content')
<section class="hero text-center">
    <br/>
    <br/>
    <br/>
    <br/>
    <h2 >
        <strong>
              WELCOME TO BOOK STORE
        </strong>
    </h2>
    <br>
    <a href="{{url('/books')}}"><button class="button large">Check out My Books</button></a>
</section>
<br/>
<div class="subheader text-center">
     <h2>BOOKS</h2>
</div>

<!-- Latest SHirts -->
<div class="row">
   @forelse($books->chunk(4) as $chunk)
    @foreach($chunk as $book)
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
     @endforeach
    @empty
    <h3>No Book<h3>
    @endforelse
</div>
<!-- Footer -->
<br>
@endsection
