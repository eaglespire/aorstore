@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @forelse($products as $product)
               <div class="col-sm-3">
                   <div class="card px-3 mx-2" style="width: 18rem;">
                       <img src="https://cdn.pixabay.com/photo/2017/01/13/04/56/t-shirt-1976334_960_720.png" class="card-img-top" alt="...">
                       <div class="card-body">
                           <h5 class="card-title">{{ $product->name }}</h5>
                           <p class="card-text">$ {{ number_format($product->price,1) }}</p>
                           <form action="{{ route('addToCart') }}" method="post">
                               @csrf
                               <input type="hidden" name="id" value="{{ $product->id }}">
                               <button type="submit" class="btn btn-primary">Add to Cart</button>
                           </form>
                       </div>
                   </div>
               </div>
            @empty
                <p>No Products to display</p>
            @endforelse
        </div>
    </div>
@endsection
