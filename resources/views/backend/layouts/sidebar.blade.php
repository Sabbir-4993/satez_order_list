<!-- Left Sidenav -->
<div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand">
        <a href="{{route('admin.home')}}" class="logo">
            <span>
                <img src="{{asset('assets/images/logo-sm.png')}}" alt="logo-small" class="logo-sm">
            </span>
            <span>
                <img src="{{asset('assets/images/logo.png')}}" alt="logo-large" class="logo-lg logo-light">
                <img src="{{asset('assets/images/logo-dark.png')}}" alt="logo-large" class="logo-lg logo-dark">
            </span>
        </a>
    </div>
    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">
            <li class="menu-label mt-0">Main</li>
            <li>
                <a href="{{route('admin.home')}}"> <i class="mdi mdi-shield-home"></i><span>Dashboard</span></a>
            </li>
            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-border-all"></i><span>Product</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.product_all')}}"><i class="mdi mdi-card-plus"></i>Product All</a>
                        <a class="nav-link" href="{{route('admin.product_list')}}"><i class="mdi mdi-card-plus"></i>Product List</a>
                        <a class="nav-link" href="#"><i class="mdi mdi-format-list-bulleted-type"></i>Report</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-border-all"></i><span>Order</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.order_create')}}"><i class="mdi mdi-card-plus"></i>Create</a>
                        <a class="nav-link" href="#"><i class="mdi mdi-format-list-bulleted-type"></i>Details</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-tooltip-account"></i><span>Customer</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="mdi mdi-information-variant"></i>Info</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-truck-check"></i><span>Delivery</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="mdi mdi-timetable"></i>Delivery Schedule</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="mdi mdi-file-document-outline"></i>Invoice</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="mdi mdi-calendar-multiple-check"></i>Report</a>
            </li>
        </ul>
        <ul class="metismenu left-sidenav-menu">
            <li class="menu-label mt-0">Seetings</li>
            <li>
                <a href="{{route('admin.home')}}"> <i class="mdi mdi-settings"></i><span>Seetings</span></a>
            </li>
            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-account-circle"></i><span>User</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="mdi mdi-account-multiple-plus"></i>Add User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="mdi mdi-security"></i>Reset Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="mdi mdi-account-key-outline"></i>Permission</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- end left-sidenav-->
