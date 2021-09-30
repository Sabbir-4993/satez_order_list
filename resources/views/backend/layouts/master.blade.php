@include('backend.layouts.header')

<body>
<!-- <body data-layout="horizontal"> -->

<!-- Begin page -->
<div id="layout-wrapper">
    @include('backend.layouts.topbar')

    <!-- ========== Left Sidebar Start ========== -->
    @include('backend.layouts.sidebar')
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content" id="miniaresult">
        @yield('content')
    </div>

    @include('backend.layouts.footer')
