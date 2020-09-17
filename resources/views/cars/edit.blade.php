@section('title')
Car Edit
@endsection
@extends('layouts.layout')
@section('style')

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
            <h4 class="page-title">Car Edit</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">

                    <li class="breadcrumb-item active" aria-current="page"><a
                                href="{{route('cars.index')}}">Cars</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Car Edit</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <a class="btn btn-primary-rgba" href="{{ route('cars.index') }}" >Back to Car List</a>
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
            <form method="post" action="{{ route('cars.edit') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="carId" value="{{ $data->id }}">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="form-group mb-0">
                                <label for="cutting_method" class="col-form-label">Make</label>
                                <input type="text" @if(isset($data->make)) value="{{ $data->make }}"@endif name="carMake" class="form-control" placeholder="Add Car Make" required="">
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="form-group mb-0">
                                <label for="cutting_method" class="col-form-label">Model</label>
                                <input type="text" @if(isset($data->model)) value="{{ $data->model }}"@endif name="carModel" class="form-control" placeholder="Add Car Model" required="">
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="form-group mb-0">
                                <label for="cutting_method" class="col-form-label">Year</label>
                                <input type="number" @if(isset($data->year)) value="{{ $data->year }}"@endif name="carYear" class="form-control" placeholder="Add Car Year" required="" >
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="form-group mb-0">
                                <label for="cutting_method" class="col-form-label">Plate</label>
                                <input type="number" @if(isset($data->plate)) value="{{ $data->plate }}"@endif name="carPlate" class="form-control" placeholder="Add Car Plate" required="">
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="form-group mb-0">
                                <label for="cutting_method" class="col-form-label">State</label>
                                <input type="text" @if(isset($data->state)) value="{{ $data->state }}"@endif name="carState" class="form-control" placeholder="Add Car State" required="" >
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="form-group mb-0">
                                <label for="cutting_method" class="col-form-label">Color</label>
                                <input type="text" @if(isset($data->color)) value="{{ $data->color }}"@endif name="carColor" class="form-control" placeholder="Add Car Color" required="" >
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="form-group mb-0">
                                <label for="cutting_method" class="col-form-label">Mileage</label>
                                <input type="number" @if(isset($data->mileage)) value="{{ $data->mileage }}"@endif name="carMileage" class="form-control" placeholder="Add Car Mileage" required="">
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <label for="cutting_method" class="col-form-label">Manual/Auto Transmission</label>
                            <select id="carManualAuto" name="carManualAuto" class="form-control">
                                <option @if(isset($data->manual_auto) && $data->manual_auto == 1) selected @endif value="1">Auto</option>
                                <option @if(isset($data->manual_auto) && $data->manual_auto == 0) selected @endif value="0">Manual</option>
                            </select>
                        </div>

                        <div class="col-lg-12 mt-4">
                            <div class="form-group mb-0">
                                <button type="submit"
                                        class="btn btn-primary pl-5 pr-5">Save Car</button>
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
