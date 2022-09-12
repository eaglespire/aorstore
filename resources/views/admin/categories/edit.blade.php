@extends('layouts.master')
@section('page-title','Categories')
@section('page-breadcrumb','Edit category')
@section('link', route('admin.categories.index'))
@section('linkText', 'Go back')
@section('content')
    <div class="row">
        <div class="col">
            <form method="post" action="{{ route('admin.categories.update', $category->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input value="{{ $category->name }}" name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <img width="200" src="{{ asset("storage/categories/$category->image") }}" alt="image"> <br>
                    <input type="file" name="image" id="" class="form-control-file">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    <!-- end row -->
@endsection
