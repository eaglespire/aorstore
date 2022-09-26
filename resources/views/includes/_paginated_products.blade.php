@if($latest->isNotEmpty())
<section class="section product-slider pb-0">
    <div class="container">
        <div class="row">
            <div class="section-header col-12">
                <h2 class="text-transform-none">This week's highlight</h2>
            </div>
        </div>
        <div class="productSlider grid-products">
            @foreach($latest as $product)
                <div class="item">
                <!--Start Product Image-->
                <div class="product-image">
                    <!--Start Product Image-->
                    <a href="product-layout1.html" class="product-img">
                        <!-- image -->
                            <img class="primary blur-up lazyload" data-src="{{ asset('storage/products/'.$product->cover_image) }}" src="{{ asset('storage/products/'.$product->cover_image) }}" alt="" title="">
                        <!-- End image -->
                        <!-- product label -->
                        <div class="product-labels">
                            <span class="lbl on-sale">{{ $product->discount }}% Off</span>
                        </div>
                        <!-- End product label -->
                    </a>
                    <!--End Product Image-->

                    <!--Product Button-->
                    <div class="button-set style0 d-none d-md-block">
                        <ul>
                            <!--Cart Button-->
                            <li>
                                <form action="{{ route('addToCart') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <button type="submit" class="btn-icon btn cartIcon" href="">
                                        <i class="icon an an-cart-l"></i>
                                        <span class="tooltip-label top">Add to Cart</span>
                                    </button>
                                </form>
                            </li>

                                <!--End Cart Button-->
                        </ul>
                    </div>
                    <!--End Product Button-->
                </div>
                <!--End Product Image-->
                <!--Start Product Details-->
                <div class="product-details text-center">
                    <!--Product Name-->
                    <div class="product-name text-uppercase">
                        <a href="product-layout1.html">{{ $product->name }}</a>
                    </div>
                    <!--End Product Name-->
                    <!--Product Price-->
                    <div class="product-price">
                        <span class="old-price">&#8358;{{ number_format($product->price,1) }}</span>
                        <span class="price">&#8358;{{ number_format($product->discountedPrice($product->price,$product->discount),1) }}</span>
                    </div>
                    <!--End Product Price-->
                </div>
                <!--End Product Details-->
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
