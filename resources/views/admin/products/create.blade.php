@extends('layouts.master')
@section('page-title','Products')
@section('page-breadcrumb','Create new product')
@section('link', route('admin.products.index'))
@section('linkText', 'Go back')
@section('content')
    <div class="row">
        <div class="col">
            @if($categories->isNotEmpty())
                <form method="post" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="metatitle">Product name</label>
                            <input name="name" type="text" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="metatitle">Price</label>
                            <input name="price" type="number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="metakeywords">Discount</label>
                            <input id="metakeywords" name="discount" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="metatitle">Quantity</label>
                            <input name="quantity" type="number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="metakeywords">Category</label>
                            <select name="category_id" id="" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="metatitle">Cover Image</label>
                            <input name="cover_image" type="file" class="form-control-file" required>
                        </div>
                        <div class="form-group">
                            <label for="metatitle">Slider Images</label>
                            <input name="images[]" type="file" class="form-control-file" multiple required>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="metadescription">Description</label>
                            <textarea id="editor" class="form-control" name="description" rows="5"></textarea>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success mr-1 waves-effect waves-light">Submit</button>
            </form>
            @else
                <div class="alert alert-warning">
                <div class="card">
                    <div class="card-body">
                        Please, create a category first
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
                            Click here
                        </a>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    <!-- end row -->
@endsection

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

@endpush
