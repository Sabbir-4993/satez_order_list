<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{route('admin.home')}}"> <i class="mdi mdi-shield-home"></i><span>Dashboard</span></a>
                </li>
{{--                <li>--}}
{{--                    <a href="javascript: void(0);"><i class="mdi mdi-border-all"></i><span>Product</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>--}}
{{--                    <ul class="nav-second-level" aria-expanded="false">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{route('admin.product_all')}}"><i class="mdi mdi-card-plus"></i>Product All</a>--}}
{{--                            <a class="nav-link" href="{{route('admin.product_list')}}"><i class="mdi mdi-card-plus"></i>Product List</a>--}}
{{--                            <a class="nav-link" href="#"><i class="mdi mdi-format-list-bulleted-type"></i>Report</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
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
                            <a class="nav-link" href="{{route('admin.customer.index')}}"><i class="mdi mdi-account-multiple-plus"></i>Create</a>
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
                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-file-document-outline"></i>
                        <span>Invoice</span>
                        <span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-file-document-outline"></i>
                        <span>Report</span>
                        <span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
