<!-- Left Menu Start -->
<ul class="metismenu" id="side-menu">
    <li class="menu-title">Overview</li>
    <li>
        <a href="{{ route('admin.home') }}" class="waves-effect">
            <i class="ion ion-md-speedometer"></i><span class="badge badge-success badge-pill float-right">2</span> <span> Dashboard </span>
        </a>
    </li>

    <li class="menu-title">Components</li>

    <li>
        <a href="{{ route('admin.categories.index') }}" class="waves-effect"><i class="ion ion-md-calendar"></i><span> Categories </span></a>
    </li>

    <li>
        <a href="javascript:void(0);" class="waves-effect waves-light"><i class="ion ion-md-cart"></i><span> Products <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
        <ul class="submenu">
            <li><a href="{{ route('admin.products.index') }}">View Products</a></li>
            <li><a href="{{ route('admin.products.create') }}">Create Product</a></li>
        </ul>
    </li>

</ul>
