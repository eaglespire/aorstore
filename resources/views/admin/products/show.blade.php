@extends('layouts.master')
@section('page-title','Products')
@section('page-breadcrumb','Create new product')
@section('link', route('admin.products.index'))
@section('linkText', 'Go back')
@section('content')
    <div class="row">
        <div class="col">
            @if(isset($product->images))
                <div class="jumbotron">
                    @foreach($product->images as $image)
                        <figure class="figure">
                            <img width="200" src="{{ asset("storage/products/sliders/".$image) }}" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
{{--                            <figcaption class="figure-caption">A caption for the above image.</figcaption>--}}
                        </figure>
                    @endforeach
            </div>
            @endif
        </div>
    </div>
@endsection
