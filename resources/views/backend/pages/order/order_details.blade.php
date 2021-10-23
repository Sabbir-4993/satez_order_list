@extends('backend.layouts.master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Order List</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript:
                                    void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Order List</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="mb-4">
                                        <button type="button" class="btn btn-light waves-effect waves-light"><i class="bx bx-plus me-1"></i>Create Order</button>
                                    </div>
                                </div>
                                <div class="col-sm-auto">
                                    <div class="d-flex align-items-center gap-1 mb-4">
                                        <div class="input-group datepicker-range">
                                            <input type="text" class="form-control flatpickr-input" data-input aria-describedby="date1">
                                            <button class="input-group-text" id="date1" data-toggle><i class="bx bx-calendar-event"></i></button>
                                        </div>
                                        <div class="dropdown">
                                            <a class="btn btn-link text-muted py-1font-size-16 shadow-nonedropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="table-responsive">
                                <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse;
                                border-spacing: 0 8px; width: 100%;">
                                    <thead>
                                    <tr class="bg-transparent">
                                        <th style="width: 30px;">
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" name="check" class="form-check-input" id="checkAll">
                                                <label class="form-check-label" for="checkAll"></label>
                                            </div>
                                        </th>
                                        <th style="width: 120px;">Invoice ID</th>
                                        <th>Order Date</th>
                                        <th>Customer Name</th>
                                        <th>Phone</th>
                                        <th>Amount</th>
                                        <th>Delivery Date</th>
                                        <th>Payment Status</th>
                                        <th style="width: 150px;">Invoice</th>
                                        <th style="width: 90px;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td>
                                            <div class="form-check
                                                font-size-16">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-medium">#FB5214</a>
                                        </td>
                                        <td>12 Oct, 2021</td>
                                        <td>Mohiuddin Shiblee</td>
                                        <td>+8801234567890</td>
                                        <td>৳ 26.30</td>
                                        <td>
                                            <div class="badge badge-soft-warning font-size-12">14 Oct, 2021</div></td>
                                        <td>
                                            <div class="badge badge-soft-primary font-size-12">Cash On Delivery</div>
                                        </td>
                                        <td>
                                            <div>
                                                <button type="button" class="btn btn-soft-light btn-sm w-xs waves-effect btn-label waves-light">
                                                    <i class="bx bx-download label-icon"></i>
                                                    Pdf
                                                </button>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </button>
                                                <ul class="dropdown-menu
                                                    dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#">View</a></li>
                                                    <li><a class="dropdown-item" href="#">Status</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check
                                                font-size-16">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-medium">#FB5214</a>
                                        </td>
                                        <td>12 Oct, 2021</td>
                                        <td>Mohiuddin Shiblee</td>
                                        <td>+8801234567890</td>
                                        <td>৳ 26.30</td>
                                        <td>
                                            <div class="badge badge-soft-warning font-size-12">14 Oct, 2021</div></td>
                                        <td>
                                            <div class="badge badge-soft-primary font-size-12">Cash On Delivery</div>
                                        </td>
                                        <td>
                                            <div>
                                                <button type="button" class="btn btn-soft-light btn-sm w-xs waves-effect btn-label waves-light">
                                                    <i class="bx bx-download label-icon"></i>
                                                    Pdf
                                                </button>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </button>
                                                <ul class="dropdown-menu
                                                    dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#">View</a></li>
                                                    <li><a class="dropdown-item" href="#">Status</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table responsive -->
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
@endsection

@section('css')
    <link href="{{asset('assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('js')
    <!-- flatpickr js -->
    <script src="{{asset('assets/libs/flatpickr/flatpickr.min.js')}}"></script>

    <!-- Required datatable js -->
    <script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Responsive examples -->
    <script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
    <!-- init js -->
    <script src="{{asset('assets/js/pages/invoices-list.init.js')}}"></script>

    <script>
        $('#checkAll').on('change', function () {
            $('.table-check .form-check-input').prop('checked', $(this).prop("checked"));
        });
        $('.table-check .form-check-input').change(function () {
            if ($('.table-check .form-check-input:checked').length == $('.table-check .form-check-input').length) {
                $('#checkAll').prop('checked', true);
            } else {
                $('#checkAll').prop('checked', false);
            }
        });
    </script>
@endsection
