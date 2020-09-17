@section('title')
Driver Edit
@endsection
@extends('layouts.layout')
@section('style')
    @php
        $lang_current = Config::get('app.locale');
    @endphp
    <link href="{{ asset('assets/dashboard/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/dashboard/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Responsive Datatable css -->
    <link href="{{ asset('assets/dashboard/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/dashboard/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css">

@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Driver Edit</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">

                    <li class="breadcrumb-item active" aria-current="page"><a
                                href="{{route('drivers.index')}}">Driver</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Driver Edit</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <a class="btn btn-primary-rgba" href="{{ route('drivers.index') }}" >Back to Driver List</a>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <form method="post" action="{{ route('drivers.edit') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="driverId" value="{{ $data->id }}">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="form-group mb-0">
                                <label for="cutting_method" class="col-form-label">First Name</label>
                                <input type="text" @if(isset($data->first_name)) value="{{ $data->first_name }}"@endif name="driverFirstName" class="form-control" placeholder="Add First Name" required="">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="form-group mb-0">
                                <label for="cutting_method" class="col-form-label">Last Name</label>
                                <input type="text" @if(isset($data->last_name)) value="{{ $data->last_name }}"@endif name="driverLastName" class="form-control" placeholder="Add Last Name" required="">
                            </div>
                        </div>



                        <div class="col-lg-6 mb-4">
                            <div class="form-group mb-0">
                                <label for="type">Car Model</label>
                                <select class="form-control" name="carId" required="" id="carId">
                                    <option disabled selected value="">Select Car Number</option>
                                    @foreach($cars as $cate)
                                        <option value="{{$cate->id}}" @if(isset($data->car_id) && $data->car_id == "$cate->id") selected @endif>{{$cate->id}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">

                            <label for="cutting_method" class="col-form-label">Driver Stick Shift</label>
                            <select id="driverStickShift" name="driverStickShift" class="form-control">
                                <option @if(isset($data->drive_stick_shift) && $data->drive_stick_shift == 1) selected @endif value="1">Yes</option>
                                <option @if(isset($data->drive_stick_shift) && $data->drive_stick_shift == 0) selected @endif value="0">No</option>
                            </select>
                        </div>


                        <div class="col-lg-12 mt-4">
                            <div class="form-group mb-0">
                                <button type="submit"
                                        class="btn btn-primary pl-5 pr-5">Save Driver</button>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
            </form>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>

<!-- End Contentbar -->
@endsection
@section('script')

<script src="{{ asset('assets/dashboard/plugins/datepicker/datepicker.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/plugins/datepicker/i18n/datepicker.en.js') }}"></script>


{{-- <script src="{{ asset('assets/dashboard/js/custom/custom-toasts.js') }}"></script> --}}

<script>
    $(document).ready(function() {

        $('#default-date').datepicker({

            dateFormat: 'yyyy/mm/dd',

            language: 'en',
        });

        $('#default-date12').datepicker({

            dateFormat: 'yyyy/mm/dd',

            language: 'en',
        });


    });
</script>
@endsection
