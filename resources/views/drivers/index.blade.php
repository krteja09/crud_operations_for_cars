@section('title')
Driver List
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

    <link href="{{ asset('assets/dashboard/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Driver List</h4>

        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <a href="{{ route('drivers.create') }}" class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Add Driver</a>
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
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless" id="default-datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Car Number</th>
                                    <th>Drive Stick Shift</th>
                                    <th>Update Date</th>
                                    <th>Detail</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($drivers) > 0)
                                    @foreach($drivers as $key => $driver)
                                        <tr>
                                            <td scope="row">{{ $key+1 }}</td>

                                            
                                            <td>{{ $driver->first_name }}</td>
                                            <td>{{ $driver->last_name }}</td>
                                            <td>{{$driver->car_id}}</td>
                                            {{--<td>{{$driver->drive_stick_shift}}</td>--}}
                                            <td>
                                                <div class="custom-control custom-switch" >
                                                    <input type="checkbox" onclick="status_change('{{csrf_token()}}','{{$driver->id}}','{{url('drivers/drive_stick_shift')}} ')" {{ $driver->drive_stick_shift == 1 ? 'checked':''}} class="custom-control-input" id="customSwitch{{$key}}">
                                                    <label class="custom-control-label" for="customSwitch{{$key}}"></label>
                                                </div>
                                            </td>

                                            <td>{{ $driver->updated_at }}</td>
                                            <td>
                                                <div class="button-list">
                                                    <a href="{{route('drivers.detail', $driver->id)}}" class="btn btn-success-rgba"><i class="feather icon-eye"></i></a>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="button-list">
                                                    <a href="{{route('drivers.editview', $driver->id)}}" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="button-list">
                                                    <a onclick="deleteConfirm({{$driver->id}})" class="btn btn-danger-rgba"><i class="feather icon-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>

<!-- End Contentbar -->
@endsection

@section('script')
    <script>

        function status_change(token, id, route) {
            $.ajax({
                url : route,
                type: "POST",
                data: {_token: token, id: id},
                success: function (response) {
                    //$(".table").load(location.href + " .table>*", "");
                }
            });
        }
    </script>

    <script src="{{ asset('assets/dashboard/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/dashboard/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/plugins/datatables/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('assets/dashboard/js/custom/custom-toasts.js') }}"></script>


    <!-- Sweet-Alert js -->
    <script src="{{ asset('assets/dashboard/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/custom/custom-sweet-alert.js') }}"></script>

    <script>
        $(document).ready(function() {

            $('#default-datatable').DataTable();

        });
    </script>

    <script>
    function deleteConfirm(id) {

        swal({
            title: 'Are you sure?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger m-l-10',
            buttonsStyling: false
        }).then(function () {

            $.ajax({
                method: "post",
                url: "{{url('drivers/delete_driver')}}",
                headers: {
                    'X-CSRF-TOKEN': '<?= csrf_token() ?>'
                },

                data : JSON.stringify({id : id}),
                datatype: 'JSON',
                contentType: 'application/json',

                async: true,
                success: function (data) {
                    console.log(data);
                    //  wait.resolve();
                    $(".loadingMask").css('display', 'none');

                    if (data === 0) {
                        swal(
                            'Error',
                            'Please try again',
                            'error'
                        )
                    } else {
                        swal(
                            'Done!',
                            'Deleted Successfully',
                            'success'
                        ).then(function (){
                            window.location = "{{route('drivers.index')}}"
                        });
                    }
                },
                error: function () {
                    swal(
                        'Error',
                        'Please try again',
                        'error'
                    )
                }
            });

        }, function (dismiss) {
            if (dismiss === 'cancel') {
                swal(
                    'Cancelled',
                    'Your Driver data is safe :)',
                    'error'
                )
            }
        })

    }
    </script>
@endsection
