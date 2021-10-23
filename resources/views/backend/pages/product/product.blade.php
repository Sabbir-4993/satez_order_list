@extends('backend.layouts.master')

@section('title')
    Product List
@endsection

@section('breadcrumb')
    Dashboard / Product
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Total Product List</h4>
                </div><!--end card-header-->
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>SKU</th>
                                <th>Name</th>
{{--                                <th>Stock</th>--}}
                                <th>Regular Price</th>
                                <th>Sale Price</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($products as $key=>$row )
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$row->id}}</td>
                                <td>{{$row->name}}</td>
{{--                                <td>{{$row->stock_status}}</td>--}}
                                <td>{{$row->regular_price}}</td>
                                <td>{{$row->sale_price}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection

@section('css')
    <!-- DataTables -->
    <link href="{{asset('assets/plugins/datatables/dataTables.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables/buttons.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('js')
    <!-- Required datatable js -->
    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/dataTables.bootstrap5.min.js')}}"></script>

    <!-- Responsive examples -->
    <script src="{{asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/pages/jquery.datatable.init.js')}}"></script>
@endsection
