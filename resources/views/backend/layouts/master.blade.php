@include('backend.layouts.header')
<body>

@include('backend.layouts.sidebar')


<div class="page-wrapper">

    @include('backend.layouts.topbar')

    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row">
                            <div class="col">
                                <h4 class="page-title">Satez</h4>
                                <ol class="breadcrumb">

                                    <li class="breadcrumb-item active">@yield('breadcrumb')</li>
                                </ol>
                            </div><!--end col-->
                            <div class="col-auto align-self-center">
                                <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                    <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                    <span class="" id="Select_date">Jan 11</span>
                                    <i data-feather="calendar" class="align-self-center icon-xs ms-1"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-primary">
                                    <i data-feather="download" class="align-self-center icon-xs"></i>
                                </a>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div><!--end row-->
            <!-- end page title end breadcrumb -->

            @yield('content')

        </div><!-- container -->

        <footer class="footer text-center text-sm-start">
            &copy; <script>
                document.write(new Date().getFullYear())
            </script> Trimatric <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
                    class="mdi mdi-heart text-danger"></i> by Trimatric IT</span>
        </footer><!--end footer-->
    </div>
    <!-- end page content -->
</div>
<!-- end page-wrapper -->

@include('backend.layouts.footer')
