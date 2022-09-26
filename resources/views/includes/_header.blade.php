<div id="header" class="header-10">
    <div class="header-main">
        <!--Header-->
        <header class="header header-wrap container d-flex align-items-center">
            <div class="row g-0 align-items-center w-100">
{{--                <!--Search Inline / Menu Toggle-->--}}
{{--                <div class="col-4 col-sm-4 col-md-4 col-lg-5 d-flex">--}}
{{--                    <!--Mobile Toggle-->--}}
{{--                    <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open me-2 d-lg-none"><i class="icon an an-times-l"></i><i class="icon an an-bars-l"></i></button>--}}
{{--                    <!--End Mobile Toggle-->--}}
{{--                    <!--Search-->--}}
{{--                    <div class="site-search iconset d-lg-none"><i class="icon an an-search-l"></i><span class="tooltip-label">Search</span></div>--}}
{{--                    <!--End Search-->--}}
{{--                    <!--Search Inline-->--}}
{{--                    <form class="form minisearch search-inline d-none d-lg-block" id="header-search1" action="#" method="get">--}}
{{--                        <label class="label d-none"><span>Search</span></label>--}}
{{--                        <div class="control">--}}
{{--                            <div class="searchField d-flex">--}}
{{--                                <div class="search-category">--}}
{{--                                    <select id="rgsearch-category1" name="rgsearch[category]" data-default="All Categories" class="">--}}
{{--                                        <option value="00" label="All Categories" selected="selected">All Categories</option>--}}
{{--                                        <optgroup id="rgsearch-shop1" label="Shop">--}}
{{--                                            <option value="0">- All</option>--}}
{{--                                            <option value="1">- Men</option>--}}
{{--                                            <option value="2">- Women</option>--}}
{{--                                            <option value="3">- Shoes</option>--}}
{{--                                            <option value="4">- Blouses</option>--}}
{{--                                            <option value="5">- Pullovers</option>--}}
{{--                                            <option value="6">- Bags</option>--}}
{{--                                            <option value="7">- Accessories</option>--}}
{{--                                        </optgroup>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="input-box d-flex w-100">--}}
{{--                                    <input type="text" name="q" value="" placeholder="Search by keyword or #" class="input-text rounded-0 border-start-0 border-end-0">--}}
{{--                                    <button type="submit" title="Search" class="action search"><i class="icon an an-search-l"></i></button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                    <!--End Search Inline-->--}}
{{--                </div>--}}
{{--                <!--End Search Inline / Menu Toggle-->--}}
                <!--Logo -->
                <div class="col-4 col-sm-4 col-md-4 col-lg-2 d-flex">
                    <div class="logo mx-auto"><a href="index.html"><img class="logo-img mh-100" src="assets/images/logo.svg" alt="Optimal Multipurpose eCommerce Bootstrap 5 Html Template" title="Optimal Multipurpose eCommerce Bootstrap 5 Html Template" width="150" height="40" /><span class="logo-txt d-none">Optimal</span></a></div>
                </div>
                <!--End Logo / Menu Toggle-->
                <!--Right Action-->
                <div class="col-4 col-sm-4 col-md-4 col-lg-5 icons-col text-right d-flex justify-content-end">
                    <!--Setting Dropdown-->
                    <div class="user-link iconset"><i class="icon an an-user-expand"></i><span class="tooltip-label">Account</span></div>
                    <div id="userLinks">
                        <ul class="user-links">
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Sign Up</a></li>
                            <li><a href="my-wishlist.html">Wishlist</a></li>
                            <li><a href="compare-style1.html">Compare</a></li>
                        </ul>
                    </div>
                    <!--End Setting Dropdown-->
                    <!--Minicart Drawer-->
                    <div class="header-cart iconset">
                        <a href="cart-style1.html" class="site-header__cart btn-minicart" data-bs-toggle="modal" data-bs-target="#minicart-drawer">
                            <i class="icon an an-cart-l"></i><span class="site-cart-count counter d-flex-center justify-content-center position-absolute translate-middle rounded-circle">{{ $cartCount }}</span><span class="tooltip-label">Cart</span>
                        </a>
                    </div>
                    <!--End Minicart Drawer-->
                    <!--Setting Dropdown-->
                    <div class="setting-link iconset pe-0"><i class="icon an an-right-bar-s"></i><span class="tooltip-label">Settings</span></div>
                    <!--End Setting Dropdown-->
                </div>
                <!--End Right Action-->
            </div>
        </header>
        <!--End Header-->
        <!--Main Navigation Desktop-->
        <div class="menu-outer pb-1 d-none d-lg-block">
            <nav class="container">
                <div class="row">
                    <div class="col-1 col-sm-12 col-md-12 col-lg-12 align-self-center d-menu-col">
                        <!--Desktop Menu-->
                        <nav class="grid__item" id="AccessibleNav">
                            <ul id="siteNav" class="site-nav medium center hidearrow">
                                <li class="lvl1 parent megamenu"><a href="#;">Home <i class="an an-angle-down-l"></i></a>
                                </li>
                                <li class="lvl1 parent megamenu"><a href="#;">Shop <i class="an an-angle-down-l"></i></a>

                                </li>
                                <li class="lvl1 parent megamenu"><a href="{{ route('products') }}">Product <i class="an an-angle-down-l"></i></a>

                                </li>
                            </ul>
                        </nav>
                        <!--End Desktop Menu-->
                    </div>
                </div>
            </nav>
        </div>
        <!--End Main Navigation Desktop-->
        <!--Search Popup-->

        <!--End Search Popup-->
    </div>
</div>
