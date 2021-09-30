<div class="vertical-menu">

    <div class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{route('admin.home')}}">
                        <i class="bx bxs-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
            </ul>
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Order Details</li>
                <li>
                    <a href="{{route('admin.order_create')}}">
                        <i class="bx bxs-file-plus"></i>
                        <span>Create Order</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.order_details')}}">
                        <i class="bx bx-list-check"></i>
                        <span>Order Details</span>
                    </a>
                </li>
{{--                <li>--}}
{{--                    <a href="#">--}}
{{--                        <i class="bx bx-stats"></i>--}}
{{--                        <span>Order Status</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Product</li>
                <li>
                    <a href="{{route('admin.product_list')}}">
                        <i class="bx bx-list-ul"></i>
                        <span>Product List</span>
                    </a>
                </li>
            </ul>
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Report</li>
                <li>
                    <a href="#">
                        <i class="bx bxs-report"></i>
                        <span>Report</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
