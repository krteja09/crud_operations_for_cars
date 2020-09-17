@section('title') 
CRUD
@endsection 
@extends('layouts.layout')
@section('style')
    <style>
        @keyframes fadeInUp {
            from {
                transform: translate3d(0, 40px, 0)
            }

            to {
                transform: translate3d(0, 0, 0);
                opacity: 1
            }
        }

        @-webkit-keyframes fadeInUp {
            from {
                transform: translate3d(0, 40px, 0)
            }

            to {
                transform: translate3d(0, 0, 0);
                opacity: 1
            }
        }
        .animated {
            animation-duration: 2s;
            animation-fill-mode: both;
            -webkit-animation-duration: 2s;
            -webkit-animation-fill-mode: both
        }

        .animatedFadeInUp {
            opacity: 0
        }

        .fadeInUp {
            opacity: 0;
            animation-name: fadeInUp;
            -webkit-animation-name: fadeInUp;
        }
    </style>
<!-- Apex css -->
<link href="{{ asset('assets/dashboard/plugins/apexcharts/apexcharts.css') }}" rel="stylesheet" type="text/css" />
<!-- jvectormap css -->
<link href="{{ asset('assets/dashboard/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" type="text/css" />
<!-- Slick css -->
<link href="{{ asset('assets/dashboard/plugins/slick/slick.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/dashboard/plugins/slick/slick-theme.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Contentbar -->
<div style="position: relative;">
    <img src="{{asset('images/Background-2.jpg')}}" style="width:100%; height:100%;">
    <img class="animated animatedFadeInUp fadeInUp" style="width:100%; height:100%;position: absolute; top: 0; left: 0; right:0;" src="{{asset('images/Blockage-Busters-Van.png')}}">
</div>
@endsection 
@section('script')
<!-- Apex js -->
<script src="{{ asset('assets/dashboard/plugins/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/plugins/apexcharts/irregular-data-series.js') }}"></script>
<script src="{{ asset('assets/dashboard/js/custom/custom-chart-apex.js') }}"></script>
<!-- Slick js -->
<script src="{{ asset('assets/dashboard/plugins/slick/slick.min.js') }}"></script>
<!-- Dashboard js -->
<script src="{{ asset('assets/dashboard/js/custom/custom-dashboard-ecommerce.js') }}"></script>


@endsection

