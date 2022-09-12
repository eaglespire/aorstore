@extends('layouts.master')
@section('page-title','Categories')
@section('page-breadcrumb','Create new category')
@section('link', route('admin.categories.index'))
@section('linkText', 'Go back')
@section('content')
    <div class="row">
        <div class="col">
            <form method="post" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" id="" class="form-control-file">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <!-- end row -->
@endsection
