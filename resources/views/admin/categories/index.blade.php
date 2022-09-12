@extends('layouts.master')
@section('page-title','Categories')
@section('page-breadcrumb','All categories')
@section('content')
@section('link', route('admin.categories.create'))
@section('linkText', 'Create new')
    @if($categories->isNotEmpty())
        <div class="row">
            @for($i=0; $i < count($categories) ; $i++)
                <div class="col-xl-3 col-md-6">
                <div class="card product-box h-100">
                    <div class="card-body">
                        <div class="product-img">
                            <img src="{{ asset("storage/categories/".$categories[$i]->image) }}" class="img-fluid mx-auto d-block rounded-top" alt="work-thumbnail">
                            <div class="product-overlay">
                                <ul class="list-inline product-links social-links mb-0">
                                    <li class="list-inline-item">
                                        <a href="{{ route('admin.categories.edit', $categories[$i]->slug) }}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="dripicons-document-edit"></i></a>
                                    </li>
                                    <li class="list-inline-item">
{{--                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="dripicons-shopping-bag"></i></a>--}}
                                        <form action="{{ route('admin.categories.destroy', $categories[$i]->id) }}" class="form-inline" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i> remove
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="detail mt-3">
                            <h4 class="font-16 text-center"><a href="" class="text-dark">{{ $categories[$i]->name }}</a> </h4>
                        </div>
                    </div>
                </div>
                <!-- end product-box -->
            </div>
            @endfor
        </div>
    <!-- end row -->
    @endif
@endsection
