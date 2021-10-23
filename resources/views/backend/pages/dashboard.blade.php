@extends('backend.layouts.master')

@section('title')
    Dashboard
@endsection

@section('breadcrumb')
Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Revenu Status</h4>
                        </div><!--end col-->
                        <div class="col-auto">
                            <div class="dropdown">
                                <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    This Month<i class="las la-angle-down ms-1"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Today</a>
                                    <a class="dropdown-item" href="#">Last Week</a>
                                    <a class="dropdown-item" href="#">Last Month</a>
                                    <a class="dropdown-item" href="#">This Year</a>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div>  <!--end row-->
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="">
                        <div id="Revenu_Status" class="apex-charts"></div>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
            <div class="row">
                <div class="col-12 col-lg-6 col-xl">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col text-center">
                                    <span class="h4">৳24,500</span>
                                    <h6 class="text-uppercase text-muted mt-2 m-0">Weekly Sales</h6>
                                </div><!--end col-->
                            </div> <!-- end row -->
                        </div><!--end card-body-->
                    </div> <!--end card-body-->
                </div><!--end col-->
                <div class="col-12 col-lg-6 col-xl">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col text-center">
                                    <span class="h4">520</span>
                                    <h6 class="text-uppercase text-muted mt-2 m-0">Orders Placed</h6>
                                </div><!--end col-->
                            </div> <!-- end row -->
                        </div><!--end card-body-->
                    </div> <!--end card-body-->
                </div><!--end col-->
                <div class="col-12 col-lg-6 col-xl">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col text-center">
                                    <span class="h4">82.8%</span>
                                    <h6 class="text-uppercase text-muted mt-2 m-0">Conversion Rate</h6>
                                </div><!--end col-->
                            </div> <!-- end row -->
                        </div><!--end card-body-->
                    </div> <!--end card-body-->
                </div><!--end col-->
                <div class="col-12 col-lg-6 col-xl">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col text-center">
                                    <span class="h4">৳80.5</span>
                                    <h6 class="text-uppercase text-muted mt-2 m-0">Avg. Value</h6>
                                </div><!--end col-->
                            </div> <!-- end row -->
                        </div><!--end card-body-->
                    </div> <!--end card-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!-- end col-->

        <div class="col-lg-3">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="media">
                                <img src="assets/images/money-beg.png" alt="" class="align-self-center" height="40">
                                <div class="media-body align-self-center ms-3">
                                    <h6 class="m-0 font-20">৳1850.00</h6>
                                    <p class="text-muted mb-0">Total Revenue</p>
                                </div><!--end media body-->
                            </div><!--end media-->
                        </div><!--end col-->
                        <div class="col-auto align-self-center">
                            <p class="mb-0"><span class="text-success"><i class="mdi mdi-trending-up"></i>4.8%</span> Then Last Month</p>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
                <div class="row">
                    <div class="col-12">
                        <div class="apexchart-wrapper">
                            <div id="dash_spark_1" class="chart-gutters"></div>
                        </div>
                    </div><!--end col-->
                </div>
            </div> <!--end card-->
        </div><!-- end col-->
    </div><!--end row-->
@endsection


@section('css')

@endsection

@section('js')
    <script src="{{asset('assets/plugins/apex-charts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
    <script src="{{asset('assets/pages/jquery.analytics_dashboard.init.js')}}"></script>
    <script src="{{asset('assets/plugins/apex-charts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/pages/jquery.sales_dashboard.init.js')}}"></script>
@endsection
