@extends('backend.layouts.master')

@section('title')
    Create Order
@endsection

@section('breadcrumb')

@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Customer Info.</h4>
                </div><!--end card-header-->
                <div class=" row card-body">
                    <div class="col-3">
                        <div class="input-group mb-4">
{{--                            <label class="mb-3">Customer<span>*</span>:</label>--}}
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Customer" aria-label="Username" aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1"><button type="button" class="btn btn-outline-info btn-icon-circle btn-icon-circle-sm"><i class="fas fa-plus-square"></i></button></span>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group mb-4">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select Area</option>
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group mb-4">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select Order From</option>
                                <option value="Facebook">Facebook</option>
                                <option value="Phone">Phone Call</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group mb-4">
                            <input class="form-control" type="date" value="" id="example-date-input">
                        </div>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Product</h4>
                </div><!--end card-header-->
                <div class=" row card-body">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="col-12">
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-barcode"></i></span>
                                    <input type="text" id="search" name="search" placeholder="Search" class="form-control" />
                                    <span class="input-group-text" id="basic-addon1"><button type="button" class="btn btn-outline-info btn-icon-circle btn-icon-circle-sm"><i class="fas fa-plus-square"></i></button></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <table class="table table-responsive mb-0 table-centered">
                            <thead class="table-info">
                            <tr>

                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Potato</td>
                                    <td>1</td>
                                    <td>
                                        <input class="form-control" type="number" value="1" id="example-number-input">
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                 </tr>
                            </tbody>
                            <tfooter >
                                <tr class="table-info">
                                    <th style="text-align: right" colspan="5">Items: </th>
                                    <th style="text-align: right">Total: </th>
                                </tr>
                            </tfooter>
                        </table><!--end /table-->
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
@endsection


@section('css')
    <link href="{{asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/huebee/huebee.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/timepicker/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
@endsection

@section('js')

            <script type="text/javascript">
                var route = "{{ url('admin/product/search') }}";

                $('#search').typeahead({
                    source: function (query, process) {
                        return $.get(route, {
                            query: query
                        }, function (data) {
                            return process(data);
                        });
                    }
                });
            </script>


{{--            <script type="text/javascript">--}}
{{--        var path="{{'autocomplete'}}";--}}
{{--        $('input.typeahead').typeahead({--}}
{{--            source:function (terms,process){--}}
{{--                return $.get(path,{terms:terms},function (data){--}}
{{--                    return process(data);--}}
{{--                });--}}
{{--            }--}}
{{--        })--}}
{{--    </script>--}}

    <script src="{{asset('asset/plugins/select2/select2.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.js"></script>

    <script src="{{asset('assets/pages/jquery.forms-advanced.js')}}"></script>


@endsection
