<div class="leftbar">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <!-- Start Logobar -->
        <div class="logobar">
            <a href="{{url('/')}}" class="logo logo-large"><img src="{{ url('/') }}/assets/dashboard/images/logo.png" class="img-fluid" alt="logo"></a>
            <a href="{{url('/')}}" class="logo logo-small"><img src="{{ url('/') }}/assets/dashboard/images/small-logo.png" class="img-fluid" alt="logo"></a>
        </div>
        <!-- End Logobar -->
        <!-- Start Navigationbar -->
        <div class="navigationbar">
            <ul class="vertical-menu">
                <li>
                    <a href="{{ url('/') }}">
                      <img src="/assets/dashboard/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard"><span>CRUD</span>
                    </a>
                    
                </li>
                
                <li>
                    <a href="javaScript:void(0)">
                        <img src="{{ asset('assets/dashboard/images/svg-icon/ecommerce.svg') }}" class="img-fluid" alt="Products"><span>Management</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{ route('cars.index') }}">Cars</a></li>
                        <li><a href="{{ route('drivers.index') }}">Drivers</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div>
