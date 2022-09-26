<div class="card product-box">
    <div class="card-body">
        <div class="product-img">
            <img src="{{ asset('storage/products/'.$product->cover_image) }}" class="img-fluid mx-auto d-block rounded-top" alt="work-thumbnail">
            <div class="btn-group">
                <a href="" class="btn btn-primary">
                    <i class="fas fa-edit"></i>
                </a>
                <a href="{{ route('admin.products.show', $product->slug) }}" class="btn btn-secondary">
                    <i class="fas fa-eye"></i>
                </a>
                <form action="">
                    <button class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </div>
        </div>

        <div class="detail mt-3">
            <h4 class="font-16"><a href="" class="text-dark">{{ $product->name }}</a> </h4>

            <h5 class="my-0 font-16 float-right"><span class="text-muted mr-2"><del>&#8358; {{ $product->price }}</del></span> <b>&#8358; {{ $product->discountedPrice($product->price,$product->discount) }}</b></h5>
            <span class="badge badge-soft-primary">{{ $product->discount }} % Off</span>
        </div>
    </div>
</div>
<!-- end product-box -->
