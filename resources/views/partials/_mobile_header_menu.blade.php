<div class="mobile-header-wrapper-inner">
    <div class="mobile-header-top">
        <div class="mobile-header-logo">
            <a href="/"><img src="/assets/imgs/theme/logo.svg" alt="logo"></a>
        </div>
        <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
            <button class="close-style search-close">
                <i class="icon-top"></i>
                <i class="icon-bottom"></i>
            </button>
        </div>
    </div>
    <div class="mobile-header-content-area">
        <div class="mobile-search search-style-3 mobile-header-border">
            <form action="#">
                <input type="text" placeholder="Search for items…">
                <button type="submit"><i class="fi-rs-search"></i></button>
            </form>
        </div>
        <div class="mobile-menu-wrap mobile-header-border">
            <div class="main-categori-wrap mobile-header-border">
                <a class="categori-button-active-2" href="#">
                    <span class="fi-rs-apps"></span> Browse Categories
                </a>
                <div class="categori-dropdown-wrap categori-dropdown-active-small">
                    <ul>
                        <li><a href="shop-grid-right.html"><i class="evara-font-dress"></i>Women's Clothing</a></li>
                        <li><a href="shop-grid-right.html"><i class="evara-font-tshirt"></i>Men's Clothing</a></li>
                        <li> <a href="shop-grid-right.html"><i class="evara-font-smartphone"></i> Cellphones</a></li>
                        <li><a href="shop-grid-right.html"><i class="evara-font-desktop"></i>Computer & Office</a></li>
                        <li><a href="shop-grid-right.html"><i class="evara-font-cpu"></i>Consumer Electronics</a></li>
                        <li><a href="shop-grid-right.html"><i class="evara-font-home"></i>Home & Garden</a></li>
                        <li><a href="shop-grid-right.html"><i class="evara-font-high-heels"></i>Shoes</a></li>
                        <li><a href="shop-grid-right.html"><i class="evara-font-teddy-bear"></i>Mother & Kids</a></li>
                        <li><a href="shop-grid-right.html"><i class="evara-font-kite"></i>Outdoor fun</a></li>
                    </ul>
                </div>
            </div>
            <!-- mobile menu start -->
            <nav>
                <ul class="mobile-menu">
                    <li class="">
                        <a href="/">Home</a>
                    </li>
                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="shop-grid-right.html">categories</a>
                        <ul class="dropdown">
                            <li><a href="shop-grid-right.html">Shop Grid – Right Sidebar</a></li>
                            <li><a href="shop-grid-left.html">Shop Grid – Left Sidebar</a></li>
                            <li><a href="shop-list-right.html">Shop List – Right Sidebar</a></li>
                            <li><a href="shop-list-left.html">Shop List – Left Sidebar</a></li>
                            <li><a href="shop-fullwidth.html">Shop - Wide</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Single Product</a>
                                <ul class="dropdown">
                                    <li><a href="shop-product-right.html">Product – Right Sidebar</a></li>
                                    <li><a href="shop-product-left.html">Product – Left Sidebar</a></li>
                                    <li><a href="shop-product-full.html">Product – No sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="shop-filter.html">Shop – Filter</a></li>
                            <li><a href="shop-wishlist.html">Shop – Wishlist</a></li>
                            <li><a href="shop-cart.html">Shop – Cart</a></li>
                            <li><a href="shop-checkout.html">Shop – Checkout</a></li>
                            <li><a href="shop-compare.html">Shop – Compare</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="/">About</a>
                    </li>
                    <li class="">
                        <a href="/">Contact</a>
                    </li>
                </ul>
            </nav>
            <!-- mobile menu end -->
        </div>
        <div class="mobile-header-info-wrap mobile-header-border">
            <div class="single-mobile-header-info mt-30">
                <a  href="page-contact.html"> Our location </a>
            </div>
            <div class="single-mobile-header-info">
                <a href="{{ route('login') }}">Log In </a>
            </div>
            <div class="single-mobile-header-info">
                <a href="{{ route('register') }}">Sign Up </a>
            </div>
            <div class="single-mobile-header-info">
                <a href="#">{{ config('app.meta_phone') }}</a>
            </div>
        </div>
        <div class="mobile-social-icon">
            <h5 class="mb-15 text-grey-4">Follow Us</h5>
            <a href="#"><img src="/assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
            <a href="#"><img src="/assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
            <a href="#"><img src="/assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
            <a href="#"><img src="/assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
            <a href="#"><img src="/assets/imgs/theme/icons/icon-youtube.svg" alt=""></a>
        </div>
    </div>
</div>
