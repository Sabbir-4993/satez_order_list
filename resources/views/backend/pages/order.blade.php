@extends('backend.layouts.master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center
                    justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Create Order</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Create Order</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Customer Order</h4>
                        </div>
                        <div class="card-body">

                            <div id="progrss-wizard" class="twitter-bs-wizard">
                                <ul class="twitter-bs-wizard-nav nav nav-pills
                                nav-justified">
                                    <li class="nav-item">
                                        <a href="#progress-seller-details"
                                           class="nav-link" data-toggle="tab">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Customer Details">
                                                <i class="bx bx-list-ul"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#progress-company-document" class="nav-link" data-toggle="tab">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Product Details">
                                                <i class="bx bx-basket"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#progress-bank-detail"
                                           class="nav-link" data-toggle="tab">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delivery Time">
                                                <i class="bx bx-timer"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <!-- wizard-nav -->

                                <div id="bar" class="progress mt-4">
                                    <div class="progress-bar bg-success
                                    progress-bar-striped progress-bar-animated"></div>
                                </div>
                                <div class="tab-content twitter-bs-wizard-tab-content">
                                    <div class="tab-pane" id="progress-seller-details">
                                        <div class="text-center mb-4">
                                            <h5>Customer Details</h5>
                                            <p class="card-title-desc">Fill all information below</p>
                                        </div>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="progresspill-firstname-input">Full Name</label>
                                                        <input type="text" class="form-control" id="progresspill-firstname-input" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="progresspill-email-input">Email</label>
                                                        <input type="email" class="form-control" id="progresspill-email-input" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="progresspill-phoneno-input">Phone</label>
                                                        <input type="text" class="form-control" id="phone-mask" value="+880" maxlength="14" required="">
{{--                                                        <div class="text-muted">+{880}(000)000-00-00</div>--}}
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="progresspill-address-input">Address</label>
                                                        <textarea id="progresspill-address-input" class="form-control" rows="2" required=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <ul class="pager wizard twitter-bs-wizard-pager-link">
                                            <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="progress-company-document">
                                        <div>
                                            <div class="text-center mb-4">
                                                <h5>Product Details</h5>
                                                <p class="card-title-desc">Submit product details</p>
                                            </div>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="progresspill-pancard-input" class="form-label">Product Name</label>
                                                            <input type="text" class="form-control" id="progresspill-pancard-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="mb-3">
                                                            <label for="progresspill-vatno-input" class="form-label">Price</label>
                                                            <input type="text" class="form-control" id="progresspill-vatno-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <div class="mb-3">
                                                            <label for="progresspill-vatno-input" class="form-label">Qty</label>
                                                            <input type="text" class="form-control" id="progresspill-vatno-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <div class="mb-3">
                                                            <label for="progresspill-vatno-input" class="form-label">Unit</label>
                                                            <select class="form-select">
                                                                <option>Select</option>
                                                                <option selected>Kg</option>
                                                                <option>gr</option>
                                                                <option>ltr</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="mb-3">
                                                            <label for="progresspill-vatno-input" class="form-label">Total Price</label>
                                                            <input type="text" class="form-control" id="progresspill-vatno-input" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="mb-3">
                                                            <label for="progresspill-vatno-input" class="form-label">Action</label>
                                                            <div class="d-flex flex-wrap gap-2">
                                                                <button type="button" class="btn btn-soft-success waves-effect waves-light">
                                                                    <i class="mdi mdi-plus-box-multiple-outline d-block font-size-16 align-middle"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-soft-danger waves-effect waves-light">
                                                                    <i class="mdi mdi-trash-can d-block d-block font-size-16 align-middle"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx                                                        bx-chevron-left me-1"></i>Previous</a></li>
                                                <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">Next <i class="bx                                                        bx-chevron-right ms-1"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="progress-bank-detail">
                                        <div>
                                            <div class="text-center mb-4">
                                                <h5>Set Delivery Time</h5>
                                                <p class="card-title-desc">Fill all information below</p>
                                            </div>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-namecard-input" class="form-label">Area / Zone</label>
                                                            <select class="form-select">
                                                                <option disabled>Select Area</option>
                                                                <option>Bansree</option>
                                                                <option>Gulhan 1</option>
                                                                <option>Gulhan 2</option>
                                                                <option>Dhanmondi</option>
                                                                <option>Moghbazar</option>
                                                                <option>Khilgaon</option>
                                                                <option>Paltan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-namecard-input" class="form-label">Date and time</label>
                                                            <input class="form-control" type="datetime-local" value="2019-08-19T13:45:00" id="example-datetime-local-input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i>Previous</a></li>
                                                <li class="float-end"><a href="javascript: void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".confirmModal">Save Changes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <!-- End Page-content -->
    <!-- Modal -->
    <div class="modal fade confirmModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="bx bx-check-circle display-4 text-success"></i>
                        </div>
                        <h5>Confirm Save Changes</h5>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-light w-md"
                            data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary w-md"
                            data-bs-dismiss="modal"
                            onclick="nextTab()">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->
@endsection


@section('css')

@endsection

@section('js')
    <!-- twitter-bootstrap-wizard js -->
    <script src="{{asset('assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>
    <script src="{{asset('assets/libs/twitter-bootstrap-wizard/prettify.js')}}"></script>

    <!-- form wizard init -->
    <script src="{{asset('assets/js/pages/form-wizard.init.js')}}"></script>

    <!-- form mask -->
    <script src="{{asset('assets/libs/imask/imask.min.js')}}"></script>

    <!-- form mask init -->
    <script src="{{asset('assets/js/pages/form-mask.init.js')}}"></script>
@endsection
