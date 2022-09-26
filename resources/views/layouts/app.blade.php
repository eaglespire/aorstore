<!doctype html>
<html lang="en">
<head>
    <!--Required Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="description">
    <!-- Title Of Site -->
    <title>{{ config('app.name') }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body class="template-index index-demo10 modal-popup-style">
<!-- Page Loader -->
<div id="pre-loader"><img src="assets/images/loader.gif" alt="Loading..." /></div>
<!-- End Page Loader -->

<!--Page Wrapper-->
<div class="page-wrapper">
    <!--Topbar-->
    <div class="top-bar">
        <div class="container">
            <div class="row g-0 inner d-flex align-items-center text-uppercase">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 d-none d-lg-block d-md-block">
                    <b>FREE SHIPPING</b> ON U.S. ORDERS OVER <b>$100</b>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center text-md-end">
                    <p class="phone-no m-0 pe-2 d-inline-block"><a href="tel:4400(111)044833" class="d-flex align-items-center"><i class="an an-phone-l me-2"></i> <span class="pno">+440 0(111) 044 833</span></a></p>
                    <p class="m-0 d-inline email-id d-inline-block"><a href="mailto:info@example.com" class="d-flex align-items-center"><i class="an an-envelope-l me-2"></i> <span class="eno">info@example.com</span></a></p>
                </div>
            </div>
        </div>
    </div>
    <!--End Topbar-->
    <!--Header-->
        @include('includes._header')
    <!--End Header-->
    <!--Mobile Menu-->
    <div class="mobile-nav-wrapper" role="navigation">
        <div class="closemobileMenu"><i class="icon an an-times-l pull-right"></i> Close Menu</div>
        <ul id="MobileNav" class="mobile-nav">
            <li class="lvl1 parent megamenu"><a href="index.html">Home <i class="an an-plus-l"></i></a>
                <ul>
                    <li><a href="#" class="site-nav">Home Styles <i class="an an-plus-l"></i></a>
                        <ul>
                            <li class="lvl-2"><a href="index.html" class="site-nav">Home 01 - Default</a></li>
                            <li class="lvl-2"><a href="index-demo2.html" class="site-nav">Home 02 - Minimal</a></li>
                            <li class="lvl-2"><a href="index-demo3.html" class="site-nav">Home 03 - Colorful</a></li>
                            <li class="lvl-2"><a href="index-demo4.html" class="site-nav">Home 04 - Modern</a></li>
                            <li class="lvl-2"><a href="index-demo5.html" class="site-nav">Home 05 - Kids Clothing</a></li>
                            <li class="lvl-2"><a href="index-demo6.html" class="site-nav">Home 06 - Single Product</a></li>
                            <li class="lvl-2"><a href="index-demo7.html" class="site-nav">Home 07 - Glamour</a></li>
                            <li class="lvl-2"><a href="index-demo8.html" class="site-nav">Home 08 - Simple</a></li>
                            <li class="lvl-2"><a href="index-demo9.html" class="site-nav">Home 09 - Cool <span class="lbl nm_label1">Hot</span></a></li>
                            <li class="lvl-2"><a href="index-demo10.html" class="site-nav last">Home 10 - Cosmetic</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="site-nav">Home Styles <i class="an an-plus-l"></i></a>
                        <ul>
                            <li class="lvl-2"><a href="index-demo11.html" class="site-nav">Home 11 - Pets <span class="lbl nm_label3">Popular</span></a></li>
                            <li class="lvl-2"><a href="index-demo12.html" class="site-nav">Home 12 - Tools & Parts</a></li>
                            <li class="lvl-2"><a href="index-demo13.html" class="site-nav">Home 13 - Watches <span class="lbl nm_label1">Hot</span></a></li>
                            <li class="lvl-2"><a href="index-demo14.html" class="site-nav">Home 14 - Food</a></li>
                            <li class="lvl-2"><a href="index-demo15.html" class="site-nav">Home 15 - Christmas</a></li>
                            <li class="lvl-2"><a href="index-demo16.html" class="site-nav">Home 16 - Phone Case</a></li>
                            <li class="lvl-2"><a href="index-demo17.html" class="site-nav">Home 17 - Jewelry</a></li>
                            <li class="lvl-2"><a href="index-demo18.html" class="site-nav">Home 18 - Bag <span class="lbl nm_label3">Popular</span></a></li>
                            <li class="lvl-2"><a href="index-demo19.html" class="site-nav">Home 19 - Swimwear</a></li>
                            <li class="lvl-2"><a href="index-demo20.html" class="site-nav last">Home 20 - Furniture <span class="lbl nm_label2">New</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="site-nav">Home Styles <i class="an an-plus-l"></i></a>
                        <ul>
                            <li class="lvl-2"><a href="index-demo21.html" class="site-nav">Home 21 - Party Supplies <span class="lbl nm_label2">New</span></a></li>
                            <li class="lvl-2"><a href="index-demo22.html" class="site-nav">Home 22 - Digital <span class="lbl nm_label2">New</span></a></li>
                            <li class="lvl-2"><a href="index-demo23.html" class="site-nav">Home 23 - Vogue <span class="lbl nm_label2">New</span></a></li>
                            <li class="lvl-2"><a href="index-demo24.html" class="site-nav last">Home 24 - Glamour <span class="lbl nm_label2">New</span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="lvl1 parent megamenu"><a href="#">Shop <i class="an an-plus-l"></i></a>
                <ul>
                    <li><a href="#" class="site-nav">Category Page <i class="an an-plus-l"></i></a>
                        <ul>
                            <li><a href="category-2columns.html" class="site-nav">2 Columns with style1</a></li>
                            <li><a href="category-3columns.html" class="site-nav">3 Columns with style2</a></li>
                            <li><a href="category-4columns.html" class="site-nav">4 Columns with style3</a></li>
                            <li><a href="category-5columns.html" class="site-nav">5 Columns with style4</a></li>
                            <li><a href="category-6columns.html" class="site-nav">6 Columns with Fullwidth</a></li>
                            <li><a href="category-7columns.html" class="site-nav">7 Columns</a></li>
                            <li><a href="empty-category.html" class="site-nav last">Category Empty</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="site-nav">Shop Page <i class="an an-plus-l"></i></a>
                        <ul>
                            <li><a href="shop-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                            <li><a href="shop-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                            <li><a href="shop-top-filter.html" class="site-nav">Top Filter</a></li>
                            <li><a href="shop-fullwidth.html" class="site-nav">Fullwidth</a></li>
                            <li><a href="shop-no-sidebar.html" class="site-nav">Without Filter</a></li>
                            <li><a href="shop-listview-sidebar.html" class="site-nav">List View</a></li>
                            <li><a href="shop-listview-drawer.html" class="site-nav">List View Drawer</a></li>
                            <li><a href="shop-category-slideshow.html" class="site-nav">Category Slideshow</a></li>
                            <li><a href="shop-heading-with-banner.html" class="site-nav last">Headings With Banner</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="site-nav">Shop Page <i class="an an-plus-l"></i></a>
                        <ul>
                            <li><a href="shop-sub-collections.html" class="site-nav">Sub Collection List <span class="lbl nm_label5">Hot</span></a></li>
                            <li><a href="shop-masonry-grid.html" class="site-nav">Shop Masonry Grid</a></li>
                            <li><a href="shop-left-sidebar.html" class="site-nav">Shop Countdown</a></li>
                            <li><a href="shop-hover-info.html" class="site-nav">Shop Hover Info</a></li>
                            <li><a href="shop-right-sidebar.html" class="site-nav">Infinite Scrolling</a></li>
                            <li><a href="shop-fullwidth.html" class="site-nav">Classic Pagination</a></li>
                            <li><a href="shop-swatches-style.html" class="site-nav">Swatches Style</a></li>
                            <li><a href="shop-grid-style.html" class="site-nav">Grid Style</a></li>
                            <li><a href="shop-search-results.html" class="site-nav last">Search Results</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="site-nav">Shop Other Page <i class="an an-plus-l"></i></a>
                        <ul>
                            <li><a href="my-wishlist.html" class="site-nav">My Wishlist Style1</a></li>
                            <li><a href="my-wishlist-style2.html" class="site-nav">My Wishlist Style2</a></li>
                            <li><a href="compare-style1.html" class="site-nav">Compare Page Style1</a></li>
                            <li><a href="compare-style2.html" class="site-nav">Compare Page Style2</a></li>
                            <li><a href="cart-style1.html" class="site-nav">Cart Page Style1</a></li>
                            <li><a href="cart-style2.html" class="site-nav">Cart Page Style2</a></li>
                            <li><a href="checkout-style1.html" class="site-nav">Checkout Page Style1</a></li>
                            <li><a href="checkout-style2.html" class="site-nav">Checkout Page Style2</a></li>
                            <li><a href="checkout-success.html" class="site-nav last">Checkout Success</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="lvl1 parent megamenu"><a href="#">Product <i class="an an-plus-l"></i></a>
                <ul>
                    <li><a href="product-standard.html" class="site-nav">Product Types<i class="an an-plus-l"></i></a>
                        <ul>
                            <li><a href="product-standard.html" class="site-nav">Simple Product</a></li>
                            <li><a href="product-variable.html" class="site-nav">Variable Product</a></li>
                            <li><a href="product-grouped.html" class="site-nav">Grouped Product</a></li>
                            <li><a href="product-external-affiliate.html" class="site-nav">External / Affiliate Product</a></li>
                            <li><a href="product-outofstock.html" class="site-nav">Out Of Stock Product</a></li>
                            <li><a href="product-layout1.html" class="site-nav">New Product</a></li>
                            <li><a href="product-layout2.html" class="site-nav">Sale Product</a></li>
                            <li><a href="product-layout1.html" class="site-nav">Variable Image</a></li>
                            <li><a href="product-accordian.html" class="site-nav">Variable Select</a></li>
                            <li><a href="prodcut-360-degree-view.html" class="site-nav last">360 Degree view</a></li>
                        </ul>
                    </li>
                    <li><a href="product-layout1.html" class="site-nav">Product Page Types <i class="an an-plus-l"></i></a>
                        <ul>
                            <li><a href="product-layout1.html" class="site-nav">Product Layout1</a></li>
                            <li><a href="product-layout2.html" class="site-nav">Product Layout2</a></li>
                            <li><a href="product-layout3.html" class="site-nav">Product Layout3</a></li>
                            <li><a href="product-layout4.html" class="site-nav">Product Layout4</a></li>
                            <li><a href="product-layout5.html" class="site-nav">Product Layout5</a></li>
                            <li><a href="product-layout6.html" class="site-nav">Product Layout6</a></li>
                            <li><a href="product-layout7.html" class="site-nav">Product Layout7</a></li>
                            <li><a href="product-accordian.html" class="site-nav">Product Accordian</a></li>
                            <li><a href="product-tabs-left.html" class="site-nav">Product Tabs Left</a></li>
                            <li><a href="product-tabs-center.html" class="site-nav last">Product Tabs Center</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="lvl1 parent megamenu"><a href="#">Sale <i class="an an-plus-l"></i></a>
                <ul>
                    <li><a href="#" class="site-nav">Neck Tank Top</a></li>
                    <li><a href="#" class="site-nav">Crew Neck Sweater</a></li>
                    <li><a href="#" class="site-nav">Floral Crop Top</a></li>
                    <li><a href="#" class="site-nav">High-Waisted Pant</a></li>
                    <li><a href="#" class="site-nav">Tote Bag</a></li>
                    <li><a href="#" class="site-nav">Puffer Jacket</a></li>
                    <li><a href="shop-fullwidth.html" class="site-nav">View All Products</a></li>
                    <li><a href="shop-masonry-grid.html" class="site-nav last">Offer of the Year</a></li>
                </ul>
            </li>
            <li class="lvl1 parent megamenu"><a href="#">Features <i class="an an-plus-l"></i><span class="lbl nm_label1">New</span></a>
                <ul>
                    <li><a href="#" class="site-nav">Vendor Pages <i class="an an-plus-l"></i></a>
                        <ul>
                            <li><a href="vendor-dashboard.html" class="site-nav">Vendor Dashboard</a></li>
                            <li><a href="vendor-profile.html" class="site-nav">Vendor Profile</a></li>
                            <li><a href="vendor-uploads.html" class="site-nav">Vendor Uploads</a></li>
                            <li><a href="vendor-tracking.html" class="site-nav">Vendor Tracking</a></li>
                            <li><a href="vendor-service.html" class="site-nav">Vendor Service</a></li>
                            <li><a href="vendor-settings.html" class="site-nav last">Vendor Settings</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="site-nav">Email Template <i class="an an-plus-l"></i></a>
                        <ul>
                            <li><a target="_blank" href="email-template/email-order-success1.html" class="site-nav">Order Success 1</a></li>
                            <li><a target="_blank" href="email-template/email-order-success2.html" class="site-nav">Order Success 2</a></li>
                            <li><a target="_blank" href="email-template/email-invoice-template1.html" class="site-nav">Invoice Template 1</a></li>
                            <li><a target="_blank" href="email-template/email-invoice-template2.html" class="site-nav last">Invoice Template 2</a></li>
                            <li><a target="_blank" href="email-template/email-forgot-password.html" class="site-nav">Mail Reset password</a></li>
                            <li><a target="_blank" href="email-template/email-confirmation.html" class="site-nav">Mail Confirmation</a></li>
                            <li><a target="_blank" href="email-template/email-promotional1.html" class="site-nav">Mail Promotional 1</a></li>
                            <li><a target="_blank" href="email-template/email-promotional2.html" class="site-nav last">Mail Promotional 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="site-nav">Elements <i class="an an-plus-l"></i></a>
                        <ul>
                            <li><a href="elements-typography.html" class="site-nav">Typography</a></li>
                            <li><a href="elements-buttons.html" class="site-nav">Buttons</a></li>
                            <li><a href="elements-titles.html" class="site-nav">Titles</a></li>
                            <li><a href="elements-banner-styles.html" class="site-nav">Banner Styles</a></li>
                            <li><a href="elements-testimonial.html" class="site-nav">Testimonial</a></li>
                            <li><a href="elements-accordions.html" class="site-nav">Accordions</a></li>
                            <li><a href="elements-icons.html" class="site-nav">Icons</a></li>
                            <li><a href="elements-blog-posts.html" class="site-nav">Blog Posts</a></li>
                            <li><a href="elements-product.html" class="site-nav">Product</a></li>
                            <li><a href="elements-product-tab.html" class="site-nav">Product Tab</a></li>
                            <li><a href="elements-top-info-bar.html" class="site-nav">Top Info Bar</a></li>
                            <li><a href="elements-top-promo-bar.html" class="site-nav last">Top Promo Bar</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="lvl1 parent megamenu"><a href="#">Pages <i class="an an-plus-l"></i></a>
                <ul>
                    <li><a href="aboutus-style1.html" class="site-nav">About Us <i class="an an-plus-l"></i></a>
                        <ul class="dropdown">
                            <li><a href="aboutus-style1.html" class="site-nav">About Us Style1</a></li>
                            <li><a href="aboutus-style2.html" class="site-nav">About Us Style2</a></li>
                            <li><a href="aboutus-style3.html" class="site-nav last">About Us Style3</a></li>
                        </ul>
                    </li>
                    <li><a href="contact-style1.html" class="site-nav">Contact Us <i class="an an-plus-l"></i></a>
                        <ul class="dropdown">
                            <li><a href="contact-style1.html" class="site-nav">Contact Us Style1</a></li>
                            <li><a href="contact-style2.html" class="site-nav last">Contact Us Style2</a></li>
                        </ul>
                    </li>
                    <li><a href="lookbook-2columns.html" class="site-nav">Lookbook <i class="an an-plus-l"></i></a>
                        <ul class="dropdown">
                            <li><a href="lookbook-2columns.html" class="site-nav">2 Columns</a></li>
                            <li><a href="lookbook-3columns.html" class="site-nav">3 Columns</a></li>
                            <li><a href="lookbook-4columns.html" class="site-nav">4 Columns</a></li>
                            <li><a href="lookbook-5columns.html" class="site-nav">5 Columns + Fullwidth</a></li>
                            <li><a href="lookbook-shop.html" class="site-nav last">Lookbook Shop</a></li>
                        </ul>
                    </li>
                    <li><a href="faqs-style1.html" class="site-nav">FAQs <i class="an an-plus-l"></i></a>
                        <ul class="dropdown">
                            <li><a href="faqs-style1.html" class="site-nav">FAQs Style1</a></li>
                            <li><a href="faqs-style2.html" class="site-nav last">FAQs Style2</a></li>
                        </ul>
                    </li>
                    <li><a href="brands-style1.html" class="site-nav">Brands <i class="an an-plus-l"></i></a>
                        <ul class="dropdown">
                            <li><a href="brands-style1.html" class="site-nav">Brands Style1</a></li>
                            <li><a href="brands-style2.html" class="site-nav last">Brands Style2</a></li>
                        </ul>
                    </li>
                    <li><a href="my-account.html" class="site-nav">My Account <i class="an an-plus-l"></i></a>
                        <ul class="dropdown">
                            <li><a href="my-account.html" class="site-nav">My Account</a></li>
                            <li><a href="login-sliding-style.html" class="site-nav">Login Sliding Slideshow</a></li>
                            <li><a href="login.html" class="site-nav">Login</a></li>
                            <li><a href="register.html" class="site-nav">Register</a></li>
                            <li><a href="forgot-password.html" class="site-nav">Forgot Password</a></li>
                            <li><a href="change-password.html" class="site-nav last">Change Password</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="site-nav">Empty Pages <i class="an an-plus-l"></i></a>
                        <ul class="dropdown">
                            <li><a href="empty-category.html" class="site-nav">Empty Category</a></li>
                            <li><a href="empty-cart.html" class="site-nav">Empty Cart</a></li>
                            <li><a href="empty-compare.html" class="site-nav">Empty Compare</a></li>
                            <li><a href="empty-wishlist.html" class="site-nav">Empty Wishlist</a></li>
                            <li><a href="empty-search.html" class="site-nav last">Empty Search</a></li>
                        </ul>
                    </li>
                    <li><a href="error-404.html" class="site-nav">Error 404 </a></li>
                    <li><a href="cms-page.html" class="site-nav">CMS Page</a></li>
                    <li><a href="elements-icons.html" class="site-nav">Icons</a></li>
                    <li><a href="coming-soon.html" class="site-nav last">Coming soon <span class="lbl nm_label2">New</span></a></li>
                </ul>
            </li>
            <li class="lvl1 parent megamenu"><a href="blog-left-sidebar.html">Blog <i class="an an-plus-l"></i></a>
                <ul>
                    <li><a href="blog-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                    <li><a href="blog-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                    <li><a href="blog-fullwidth.html" class="site-nav">Fullwidth</a></li>
                    <li><a href="blog-masonry.html" class="site-nav">Masonry Blog Style</a></li>
                    <li><a href="blog-2columns.html" class="site-nav">2 Columns</a></li>
                    <li><a href="blog-3columns.html" class="site-nav">3 Columns</a></li>
                    <li><a href="blog-4columns.html" class="site-nav">4 Columns</a></li>
                    <li><a href="blog-single-post.html" class="site-nav last">Article Page</a></li>
                </ul>
            </li>
            <li class="acLink"></li>
            <li class="lvl1 bottom-link"><a href="login.html">Login</a></li>
            <li class="lvl1 bottom-link"><a href="register.html">Signup</a></li>
            <li class="lvl1 bottom-link"><a href="my-wishlist.html">Wishlist</a></li>
            <li class="lvl1 bottom-link"><a href="compare-style1.html">Compare</a></li>
            <li class="help bottom-link"><b>NEED HELP?</b><br>Call: +41 525 523 5687</li>
        </ul>
    </div>
    <!--End Mobile Menu-->

    <!--Body Container-->
    <div id="page-content" class="mt-lg-3">
        @include('partials.messages')
        @yield('content')
    </div>
    <!--End Body Container-->

    <!--Footer-->
    <div class="footer footer-10">
        <div class="footer-top clearfix bg-transparent border-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="list-inline mb-0 inline-links text-uppercase d-flex-center justify-content-center">
                            <li class="list-inline-item p-1"><a href="my-account.html">My Account</a></li>
                            <li class="list-inline-item p-1"><a href="#">Support Center</a></li>
                            <li class="list-inline-item p-1"><a href="#">Terms &amp; condition</a></li>
                            <li class="list-inline-item p-1"><a href="#">Returns &amp; Exchanges</a></li>
                            <li class="list-inline-item p-1"><a href="#">Shipping &amp; Delivery</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom clearfix border-0">
            <div class="container">
                <div class="d-flex-center flex-column justify-content-md-between flex-md-row-reverse">
                    <img src="assets/images/payment.png" alt="Paypal Visa Payments"/>
                    <div class="copytext text-uppercase">&copy; 2022 Optimal. All Rights Reserved.</div>
                </div>
            </div>
        </div>
    </div>
    <!--End Footer-->

    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon an an-chevron-up"></i></span>
    <!--End Scoll Top-->

    <!--MiniCart Drawer-->
    <div class="minicart-right-drawer modal right fade" id="minicart-drawer">
        <div class="modal-dialog">
            <div class="modal-content">
                <div id="cart-drawer" class="block block-cart">
                    <div class="minicart-header">
                        <a href="javascript:void(0);" class="close-cart" data-bs-dismiss="modal" aria-label="Close"><i class="an an-times-r" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="left" title="Close"></i></a>
                        <h4 class="fs-6 text-black">Your cart (2 Items)</h4>
                    </div>
                    <div class="minicart-content">
                        <ul class="m-0 clearfix">
                            <li class="item d-flex justify-content-center align-items-center">
                                <a class="product-image" href="product-layout1.html">
                                    <img class="blur-up lazyload" src="assets/images/products/cart-product-img1.jpg" data-src="assets/images/products/cart-product-img1.jpg" alt="image" title="">
                                </a>
                                <div class="product-details">
                                    <a class="product-title" href="product-layout1.html">Floral Crop Top</a>
                                    <div class="variant-cart mb-1">Black / XL</div>
                                    <div class="priceRow">
                                        <div class="product-price">
                                            <span class="money">$59.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="qtyDetail text-center">
                                    <div class="wrapQtyBtn">
                                        <div class="qtyField">
                                            <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon an an-minus-r" aria-hidden="true"></i></a>
                                            <input type="text" name="quantity" value="1" class="qty rounded-0">
                                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus-l" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <a href="#" class="edit-i remove"><i class="icon an an-edit-l" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                    <a href="#" class="remove"><i class="an an-times-r" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></a>
                                </div>
                            </li>
                            <li class="item d-flex justify-content-center align-items-center">
                                <a class="product-image" href="product-layout1.html">
                                    <img class="blur-up lazyload" src="assets/images/products/cart-product-img2.jpg" data-src="assets/images/products/cart-product-img2.jpg" alt="image" title="">
                                </a>
                                <div class="product-details">
                                    <a class="product-title" href="product-layout1.html">V Neck T-shirts</a>
                                    <div class="variant-cart mb-1">Blue / XL</div>
                                    <div class="priceRow">
                                        <div class="product-price">
                                            <span class="money">$199.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="qtyDetail text-center">
                                    <div class="wrapQtyBtn">
                                        <div class="qtyField">
                                            <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon an an-minus-r" aria-hidden="true"></i></a>
                                            <input type="text" name="quantity" value="1" class="qty rounded-0">
                                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus-l" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <a href="#" class="edit-i remove"><i class="icon an an-edit-l" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                    <a href="#" class="remove"><i class="an an-times-r" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="minicart-bottom text-black">
                        <div class="shipinfo text-center mb-3 text-uppercase">
                            <p class="freeShipMsg"><i class="an an-truck fs-5 me-2 align-middle"></i>SPENT <b>$199.00</b> MORE FOR FREE SHIPPING</p>
                        </div>
                        <div class="subtotal">
                            <span>Total:</span>
                            <span class="product-price">$93.13</span>
                        </div>
                        <a href="checkout-style2.html" class="w-100 p-2 my-2 btn proceed-to-checkout">Proceed to Checkout</a>
                        <a href="cart-style2.html" class="w-100 btn btn-outline-primary cart-btn">View Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End MiniCart Drawer-->
    <div class="modalOverly"></div>

    <!--Quickview Popup-->
    <div class="loadingBox"><div class="an-spin"><i class="icon an an-spinner4"></i></div></div>
    <div id="quickView-modal" class="mfp-with-anim mfp-hide">
        <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-3 mb-md-0">
                <!--Model thumbnail -->
                <div id="quickView" class="carousel slide">
                    <!-- Image Slide carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active" data-bs-slide-number="0">
                            <img class="blur-up lazyload" data-src="assets/images/products/product-5.jpg" src="assets/images/products/product-5.jpg" alt="image" title="" />
                        </div>
                        <div class="item carousel-item" data-bs-slide-number="1">
                            <img class="blur-up lazyload" data-src="assets/images/products/product-5-1.jpg" src="assets/images/products/product-5-1.jpg" alt="image" title="" />
                        </div>
                        <div class="item carousel-item" data-bs-slide-number="2">
                            <img class="blur-up lazyload" data-src="assets/images/products/product-5-2.jpg" src="assets/images/products/product-5-2.jpg" alt="image" title="" />
                        </div>
                        <div class="item carousel-item" data-bs-slide-number="3">
                            <img class="blur-up lazyload" data-src="assets/images/products/product-5-3.jpg" src="assets/images/products/product-5-3.jpg" alt="image" title="" />
                        </div>
                        <div class="item carousel-item" data-bs-slide-number="4">
                            <img class="blur-up lazyload" data-src="assets/images/products/product-5-4.jpg" src="assets/images/products/product-5-4.jpg" alt="image" title="" />
                        </div>
                    </div>
                    <!-- End Image Slide carousel items -->
                    <!-- Thumbnail image -->
                    <div class="model-thumbnail-img">
                        <!-- Thumbnail slide -->
                        <div class="carousel-indicators list-inline">
                            <div class="list-inline-item active" id="carousel-selector-0" data-bs-slide-to="0" data-bs-target="#quickView">
                                <img class="blur-up lazyload" data-src="assets/images/products/product-5.jpg" src="assets/images/products/product-5.jpg" alt="image" title="" />
                            </div>
                            <div class="list-inline-item" id="carousel-selector-1" data-bs-slide-to="1" data-bs-target="#quickView">
                                <img class="blur-up lazyload" data-src="assets/images/products/product-5-1.jpg" src="assets/images/products/product-5-1.jpg" alt="image" title="" />
                            </div>
                            <div class="list-inline-item" id="carousel-selector-2" data-bs-slide-to="2" data-bs-target="#quickView">
                                <img class="blur-up lazyload" data-src="assets/images/products/product-5-2.jpg" src="assets/images/products/product-5-2.jpg" alt="image" title="" />
                            </div>
                            <div class="list-inline-item" id="carousel-selector-3" data-bs-slide-to="3" data-bs-target="#quickView">
                                <img class="blur-up lazyload" data-src="assets/images/products/product-5-3.jpg" src="assets/images/products/product-5-3.jpg" alt="image" title="" />
                            </div>
                            <div class="list-inline-item" id="carousel-selector-4" data-bs-slide-to="4" data-bs-target="#quickView">
                                <img class="blur-up lazyload" data-src="assets/images/products/product-5-4.jpg" src="assets/images/products/product-5-4.jpg" alt="image" title="" />
                            </div>
                        </div>
                        <!-- End Thumbnail slide -->
                        <!-- Carousel arrow button -->
                        <a class="carousel-control-prev carousel-arrow" href="#quickView" data-bs-target="#quickView" data-bs-slide="prev"><i class="icon an-3x an an-angle-left"></i><span class="visually-hidden">Previous</span></a>
                        <a class="carousel-control-next carousel-arrow" href="#quickView" data-bs-target="#quickView" data-bs-slide="next"><i class="icon an-3x an an-angle-right"></i><span class="visually-hidden">Next</span></a>
                        <!-- End Carousel arrow button -->
                    </div>
                    <!-- End Thumbnail image -->
                </div>
                <!--End Model thumbnail -->
                <div class="text-center mt-3"><a href="product-layout1.html">VIEW MORE DETAILS</a></div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <h2 class="product-title">Product Quick View Popup</h2>
                <div class="product-review d-flex-center mb-2">
                    <div class="rating"><i class="icon an an-star"></i><i class="icon an an-star"></i><i class="icon an an-star"></i><i class="icon an an-star"></i><i class="icon an an-star-o"></i></div>
                    <div class="reviews ms-2"><a href="#">5 Reviews</a></div>
                </div>
                <div class="product-info">
                    <p class="product-vendor">Vendor:  <span class="fw-normal"><a href="#" class="fw-normal">Optimal</a></span></p>
                    <p class="product-type">Product Type: <span class="fw-normal">Tops</span></p>
                    <p class="product-sku">SKU:  <span class="fw-normal">50-ABC</span></p>
                </div>
                <div class="pro-stockLbl my-2">
                    <span class="d-flex-center stockLbl instock"><i class="icon an an-check-cil"></i><span> In stock</span></span>
                    <span class="d-flex-center stockLbl preorder d-none"><i class="icon an an-clock-r"></i><span> Pre-order Now</span></span>
                    <span class="d-flex-center stockLbl outstock d-none"><i class="icon an an-times-cil"></i> <span>Sold out</span></span>
                    <span class="d-flex-center stockLbl lowstock d-none" data-qty="15"><i class="icon an an-exclamation-cir"></i><span> Order now, Only  <span class="items">10</span>  left!</span></span>
                </div>
                <div class="pricebox">
                    <span class="price old-price">$400.00</span><span class="price product-price__sale">$300.00</span>
                </div>
                <div class="sort-description">Optimal Multipurpose Bootstrap 5 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as fashion.. </div>
                <form method="post" action="#" id="product_form--option" class="product-form">
                    <div class="product-options d-flex-wrap">
                        <div class="swatch clearfix swatch-0 option1">
                            <div class="product-form__item">
                                <label class="label d-flex">Color:<span class="required d-none">*</span> <span class="slVariant ms-1 fw-bold">Black</span></label>
                                <ul class="swatches-image swatches d-flex-wrap list-unstyled clearfix">
                                    <li data-value="Black" class="swatch-element color available active">
                                        <label class="rounded swatchLbl small color black" title="Black"></label>
                                        <span class="tooltip-label top">Black</span>
                                    </li>
                                    <li data-value="Green" class="swatch-element color available">
                                        <label class="rounded swatchLbl small color green" title="Green"></label>
                                        <span class="tooltip-label top">Green</span>
                                    </li>
                                    <li data-value="Orange" class="swatch-element color available">
                                        <label class="rounded swatchLbl small color orange" title="Orange"></label>
                                        <span class="tooltip-label top">Orange</span>
                                    </li>
                                    <li data-value="Blue" class="swatch-element color available">
                                        <label class="rounded swatchLbl small color blue" title="Blue"></label>
                                        <span class="tooltip-label top">Blue</span>
                                    </li>
                                    <li data-value="Red" class="swatch-element color available">
                                        <label class="rounded swatchLbl small color red" title="Red"></label>
                                        <span class="tooltip-label top">Red</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="swatch clearfix swatch-1 option2">
                            <div class="product-form__item">
                                <label class="label">Size:<span class="required d-none">*</span> <span class="slVariant ms-1 fw-bold">XS</span></label>
                                <ul class="swatches-size d-flex-center list-unstyled clearfix swatch-1 option2">
                                    <li data-value="XS" class="swatch-element xs available active">
                                        <label class="swatchLbl rounded medium" title="XS">XS</label>
                                        <span class="tooltip-label">XS</span>
                                    </li>
                                    <li data-value="S" class="swatch-element s available">
                                        <label class="swatchLbl rounded medium" title="S">S</label>
                                        <span class="tooltip-label">S</span>
                                    </li>
                                    <li data-value="M" class="swatch-element m available">
                                        <label class="swatchLbl rounded medium" title="M">M</label>
                                        <span class="tooltip-label">M</span>
                                    </li>
                                    <li data-value="L" class="swatch-element l available">
                                        <label class="swatchLbl rounded medium" title="L">L</label>
                                        <span class="tooltip-label">L</span>
                                    </li>
                                    <li data-value="XL" class="swatch-element xl available">
                                        <label class="swatchLbl rounded medium" title="XL">XL</label>
                                        <span class="tooltip-label">XL</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-action d-flex-wrap w-100 mb-3 clearfix">
                            <div class="quantity">
                                <div class="qtyField rounded">
                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon an an-minus-r" aria-hidden="true"></i></a>
                                    <input type="text" name="quantity" value="1" class="product-form__input qty">
                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus-l" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="add-to-cart ms-3 fl-1">
                                <button type="button" class="btn button-cart rounded"><span>Add to cart</span></button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="wishlist-btn d-flex-center">
                    <a class="add-wishlist d-flex-center text-uppercase me-3" href="my-wishlist.html" title="Add to Wishlist"><i class="icon an an-heart-l me-1"></i> <span>Add to Wishlist</span></a>
                    <a class="add-compare d-flex-center text-uppercase" href="compare-style1.html" title="Add to Compare"><i class="icon an an-random-r me-2"></i> <span>Add to Compare</span></a>
                </div>
                <!-- Social Sharing -->
                <div class="social-sharing share-icon d-flex-center mx-0 mt-3">
                    <span class="sharing-lbl me-2">Share :</span>
                    <a href="#" class="d-flex-center btn btn-link btn--share share-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Facebook"><i class="icon an an-facebook mx-1"></i><span class="share-title d-none">Facebook</span></a>
                    <a href="#" class="d-flex-center btn btn-link btn--share share-twitter" data-bs-toggle="tooltip" data-bs-placement="top" title="Tweet on Twitter"><i class="icon an an-twitter mx-1"></i><span class="share-title d-none">Tweet</span></a>
                    <a href="#" class="d-flex-center btn btn-link btn--share share-pinterest" data-bs-toggle="tooltip" data-bs-placement="top" title="Pin on Pinterest"><i class="icon an an-pinterest-p mx-1"></i> <span class="share-title d-none">Pin it</span></a>
                    <a href="#" class="d-flex-center btn btn-link btn--share share-linkedin" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Instagram"><i class="icon an an-instagram mx-1"></i><span class="share-title d-none">Instagram</span></a>
                    <a href="#" class="d-flex-center btn btn-link btn--share share-whatsapp" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on WhatsApp"><i class="icon an an-whatsapp mx-1"></i><span class="share-title d-none">WhatsApp</span></a>
                    <a href="#" class="d-flex-center btn btn-link btn--share share-email" data-bs-toggle="tooltip" data-bs-placement="top" title="Share by Email"><i class="icon an an-envelope-l mx-1"></i><span class="share-title d-none">Email</span></a>
                </div>
                <!-- End Social Sharing -->
            </div>
        </div>
    </div>
    <!--End Quickview Popup-->

    <!--Addtocart Added Popup-->
    <div id="pro-addtocart-popup" class="mfp-with-anim mfp-hide">
        <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        <div class="addtocart-inner text-center clearfix">
            <h4 class="title mb-3 text-success">Added to your shopping cart successfully.</h4>
            <div class="pro-img mb-3">
                <img class="img-fluid blur-up lazyload" src="assets/images/products/add-to-cart-popup.jpg" data-src="assets/images/products/add-to-cart-popup.jpg" alt="Added to your shopping cart successfully." title="Added to your shopping cart successfully." />
            </div>
            <div class="pro-details">
                <h5 class="pro-name mb-0">Ditsy Floral Dress</h5>
                <p class="sku my-2">Color: Gray</p>
                <p class="mb-0 qty-total">1 X $113.88</p>
                <div class="addcart-total bg-light mt-3 mb-3 p-2">
                    Total: <b class="price">$113.88</b>
                </div>
                <div class="button-action">
                    <a href="checkout-style1.html" class="btn btn-primary view-cart mx-1 rounded-0">Go To Checkout</a>
                    <a href="index.html" class="btn btn-secondary rounded-0">Continue Shopping</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Addtocart Added Popup-->


    <!-- Including Jquery -->
    <script src="assets/js/vendor/jquery-min.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <!--Including Javascript-->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

</div>
<!--End Page Wrapper-->
</body>

<!-- Mirrored from template.annimexweb.com/optimal/index-demo10.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Aug 2022 12:03:58 GMT -->
</html>
