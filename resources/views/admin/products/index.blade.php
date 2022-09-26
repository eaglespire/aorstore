@extends('layouts.master')
@section('page-title','Products')
@section('page-breadcrumb','Create new product')
@section('link', route('admin.products.index'))
@section('linkText', 'Go back')
@section('content')
    <div class="row">
        @if($products->isNotEmpty())
           @foreach($products as $product)
                <div class="col-xl-3 col-md-6">
                    @include('admin.products.product-box')
                </div>
            @endforeach
        @else
            <h3>No products in the database</h3>
        @endif
    </div>
    <!-- end row -->
@endsection

