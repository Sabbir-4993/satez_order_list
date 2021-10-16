@extends('backend.layouts.master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Product List</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript:
                                    void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Product List</li>
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
                            <!-- end row -->

                            <div class="table-responsive">
                                <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse;
                                border-spacing: 0 8px; width: 100%;">
                                    <thead>
                                    <tr class="bg-transparent">
                                        <th>SKU</th>
                                        <th>Created </th>
                                        <th>Product Name</th>
                                        <th>Stock</th>
                                        <th>Regular Price</th>
                                        <th>Offer Price</th>
                                        <th style="width: 150px;">Invoice</th>
                                        <th style="width: 90px;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $product )
                                        <tr>
                                            <td>{{$product->id}}</td>
                                            <td>{{$product->date_created}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->stock_status}}</td>
                                            <td>{{$product->regular_price}}</td>
                                            <td>{{$product->sale_price}}</td>
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
                                        @endforeach
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
