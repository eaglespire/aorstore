@extends('layouts.master')
@section('page-title','Dashboard')
@section('page-breadcrumb','Welcome to aorstore')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card mini-stat bg-pattern">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="dripicons-broadcast bg-soft-primary text-primary float-right h4"></i>
                    </div>
                    <h6 class="text-uppercase mb-3 mt-0">Categories</h6>
                    <h5 class="mb-3">{{ count(App\Models\Category::get()) }}</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mini-stat bg-pattern">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="dripicons-box bg-soft-primary text-primary float-right h4"></i>
                    </div>
                    <h6 class="text-uppercase mb-3 mt-0">Revenue</h6>
                    <h5 class="mb-3">$ 48,265</h5>
                    <p class="text-muted mb-0"><span class="text-danger mr-2"> -26% <i class="mdi mdi-arrow-down"></i> </span> From previous period</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mini-stat bg-pattern">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="dripicons-tags bg-soft-primary text-primary float-right h4"></i>
                    </div>
                    <h6 class="text-uppercase mb-3 mt-0">Average Price</h6>
                    <h5 class="mb-3">$ 14.6</h5>
                    <p class="text-muted mb-0"><span class="text-danger mr-2"> -26% <i class="mdi mdi-arrow-down"></i> </span> From previous period</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Weekly Sales</h4>

                    <div id="area-chart" dir="ltr"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Email Sent</h4>

                    <div id="column-chart" dir="ltr"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Earning</h4>

                    <div>
                        <div class="wid-earning">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h5 class="mt-0">$1,452</h5>
                                        <p class="text-muted mb-md-0">Weekly</p>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div id="chart1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="wid-earning">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h5 class="mt-0">$4,150</h5>
                                        <p class="text-muted mb-md-0">Monthly</p>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div id="chart2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="wid-earning">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h5 class="mt-0">$38,759</h5>
                                        <p class="text-muted mb-md-0">Yearly</p>

                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div id="chart3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xl-4">
            <div class="card messages ">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Recent stock</h4>
                    <nav>
                        <div class="nav nav-tabs tab-wid recent-stock-widget nav-justified" role="tablist">
                            <a class="nav-item nav-link active" id="nav-comp-tab" data-toggle="tab" href="#nav-comp" role="tab" aria-controls="nav-comp" aria-selected="true">
                                <i class="dripicons-device-desktop h4 product-icon"></i>
                                <p class="text-muted mb-0">Comp</p>
                            </a>
                            <a class="nav-item nav-link" id="nav-laptop-tab" data-toggle="tab" href="#nav-laptop" role="tab" aria-controls="nav-laptop" aria-selected="false">
                                <i class="dripicons-monitor h4 product-icon"></i>
                                <p class="text-muted mb-0">Lap</p>
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="nav-comp" role="tabpanel" aria-labelledby="nav-comp-tab">
                            <div class="text-center">
                                <div id="radial-chart"></div>
                                <h5 class="font-18">Computer</h5>
                                <p class="text-muted mb-0">Neque porro quisquam est</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-laptop" role="tabpanel" aria-labelledby="nav-laptop-tab">
                            <div class="text-center">
                                <div id="radial-chart-2"></div>
                                <h5 class="font-18">Laptop</h5>
                                <p class="text-muted mb-0">Ut enim ad veniam quis</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Social Source</h4>
                    <div id="multiple-radial-chart" dir="ltr"></div>
                </div>
            </div>
        </div>


    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-8">
            <canvas id="myChart" width="400" height="200"></canvas>
        </div>
        <!-- end col -->
        <div class="col-xl-4">
            <div class="card messages">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Latest Messages</h4>
                    <nav>
                        <div class="nav nav-tabs messages-tabs tab-wid nav-justified" role="tablist">
                            <a class="nav-item nav-link active" id="nav-first-tab" data-toggle="tab" href="#nav-first" role="tab" aria-controls="nav-first" aria-selected="true">
                                <h5 class="mt-0 date">10</h5>
                                <p class="text-muted mb-0">June</p>
                            </a>
                            <a class="nav-item nav-link" id="nav-second-tab" data-toggle="tab" href="#nav-second" role="tab" aria-controls="nav-second" aria-selected="false">
                                <h5 class="mt-0 date">12</h5>
                                <p class="text-muted mb-0">June</p>
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="nav-first" role="tabpanel" aria-labelledby="nav-first-tab">
                            <div class="p-2 mt-2">
                                <ul class="list-unstyled latest-message-list mb-0">
                                    <li class="message-list-item">
                                        <a href="#">
                                            <div class="media">
                                                <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-2.jpg" alt="">
                                                <div class="media-body">
                                                    <p class="float-right font-12 text-muted">Just Now</p>
                                                    <h6 class="mt-0">Mary Frye</h6>
                                                    <p class="text-muted mb-0">Hey! there I'm available...</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="message-list-item">
                                        <a href="#">
                                            <div class="media">
                                                <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-3.jpg" alt="">
                                                <div class="media-body">
                                                    <p class="float-right font-12 text-muted">11:42am</p>
                                                    <h6 class="mt-0">David Smith</h6>
                                                    <p class="text-muted mb-0">I've finished it! See you so...</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="message-list-item">
                                        <a href="#" >
                                            <div class="media">
                                                <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-4.jpg" alt="">
                                                <div class="media-body">
                                                    <p class="float-right font-12 text-muted">01:56pm</p>
                                                    <h6 class="mt-0">Troy Long</h6>
                                                    <p class="text-muted mb-0">This theme is awesome!</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary btn-sm">Load more</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-second" role="tabpanel" aria-labelledby="nav-second-tab">
                            <div class="p-2 mt-2">
                                <ul class="list-unstyled latest-message-list mb-0">
                                    <li class="message-list-item">
                                        <a href="#">
                                            <div class="media">
                                                <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-5.jpg" alt="">
                                                <div class="media-body">
                                                    <p class="float-right font-12 text-muted">09:42am</p>
                                                    <h6 class="mt-0">John Carle</h6>
                                                    <p class="text-muted mb-0">Hey! there I'm available...</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="message-list-item">
                                        <a href="#">
                                            <div class="media">
                                                <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-6.jpg" alt="">
                                                <div class="media-body">
                                                    <p class="float-right font-12 text-muted">11:07am</p>
                                                    <h6 class="mt-0">Jerry Carter</h6>
                                                    <p class="text-muted mb-0">I've finished it! See you so...</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="message-list-item">
                                        <a href="#">
                                            <div class="media">
                                                <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-7.jpg" alt="">
                                                <div class="media-body">
                                                    <p class="float-right font-12 text-muted">01:17pm</p>
                                                    <h6 class="mt-0">Shane Hill</h6>
                                                    <p class="text-muted mb-0">This theme is awesome!</p>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary btn-sm">Load more</a>
                            </div>
                        </div>
                    </div>
                    <!-- end tab-content -->
                </div>
            </div>
        </div>
        <!-- end col -->

    </div>
    <!-- end row -->
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Categories', 'Products', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of items',
                    data: [{{ $no_of_categories }}, {{ $no_of_products }}, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endpush
