@extends('backend.layouts.master')

@section('title')
    Create Customer
@endsection

@section('breadcrumb')
    Create Customer
@endsection

@section('content')
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert">
            <i class="mdi mdi-check-all label-icon"></i><strong>Success</strong> -  {{Session::get('message')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">New Customer</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{route('admin.customer.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Mobile/Phone Number</label>
                                        <input class="form-control" type="tel" value="" id="phone" name="phone" placeholder="01" required="">
                                        <span id="error_phone"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Customer Full Name</label>
                                        <input class="form-control" type="text" value="" id="name" name="name" placeholder="Full Name" required="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Email <span>(optional)</span></label>
                                        <input class="form-control" type="email" value="" id="email" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mt-3 mt-lg-0">
                                    <div class="mb-3">
                                        <label for="area_id" class="form-label font-size-13 text-muted">Area</label>
                                        <select class="form-control" data-trigger name="area_id" id="area_id" placeholder="Select Area">
                                            @php
                                                use App\Model\Area;
                                                $areas = Area::all();
                                            @endphp
                                            <option value="" disabled selected>Select Area</option>
                                            @foreach($areas as $area)
                                                <option value="{{$area->id}}">{{$area->area_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="address" class="form-label font-size-13 text-muted">Area</label>
                                        <textarea class="form-control" name="address" id="address" cols="30" rows="4" maxlength="250" required="required"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto float-right">
                            <button type="submit" id="submit" name="submit" class="btn btn-primary float-end">Submit</button>
                        </div>
                        {{ csrf_field() }}
                    <form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Customer List</h4>
                </div>
                <div class="card-body">

                    <table id="datatable" class="table table-bordered dt-responsive font-size-120">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Area</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($customer as $key=>$row)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->phone}}</td>
                            <td>{{$row->email}}</td>
                            <td>
                                {{$row->area->area_name}}
                            </td>
                            <td>{{$row->address}}</td>
                            <td>
                                <button type="button" href="#" class="btn btn-success waves-effect waves-light w-xs">
                                    <i class="mdi mdi-pencil font-size-12"></i> Edit
                                </button>
                                <button type="button" href="#" class="btn btn-danger waves-effect waves-light w-xs" disabled>
                                    <i class="mdi mdi-trash-can font-size-12"></i> Delete
                                </button>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection


@section('css')
    {{--    <!-- choices css -->--}}
    <link href="{{asset('assets/libs/choices.js/public/assets/styles/choices.min.css')}}" rel="stylesheet" type="text/css" />
    {{--    DataTables--}}
    <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('js')
<!-- pace js -->
<script src="{{asset('assets/libs/pace-js/pace.min.js')}}"></script>
<!-- Alert init js -->
<script src="{{asset('assets/js/pages/alert.init.js')}}"></script>
<!-- choices js -->
<script src="{{asset('assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>
<!-- init js -->
<script src="{{asset('assets/js/pages/form-advanced.init.js')}}"></script>
<!-- Required datatable js -->
<script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- Datatable init js -->
<script src="{{asset('assets/js/pages/datatables.init.js')}}"></script>

    <script>
        $(document).ready(function () {
           $('#phone').blur(function (){
               var error_phone = '';
               var phone = $('#phone').val();
               var _token = $('input[name="_token"]').val();
               var filter = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

               if(!filter.test(phone))
               {
                   $('#error').addClass('has-error');
                   $('#error_phone').html('<label class="text-danger">Invalid Phone Number</label>');

                   $('#submit').attr('disabled', 'disabled');
               }
               else{
                    $.ajax({
                        url: "{{ route('admin.customer.check') }}",
                        method: "POST",
                        data: {phone:phone, _token:_token},
                        success:function (result){
                            if(result == 'unique'){
                                $('#error_phone').html('<label class="text-success">Number Available</label>');
                                $('#phone').removeClass('has-error');
                                $('#submit').attr('disabled',false);
                            }
                            else {
                                $('#error_phone').html('<label class="text-danger">Number Already Exist</label>');
                                $('#phone').removeClass('has-error');
                                $('#submit').attr('disabled','disabled');
                            }
                        }
                    })
               }

           });
        });
    </script>
@endsection
