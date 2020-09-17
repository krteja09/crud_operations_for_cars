<div class="rightbar">
    <!-- Start Topbar Mobile -->
    <div class="topbar-mobile">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="mobile-logobar">
                    <a href="{{url('/dashboard')}}" class="mobile-logo"><img src="{{ url('/') }}/assets/dashboard/images/logo.png" class="img-fluid" alt="logo"></a>
                </div>
                <div class="mobile-togglebar">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <div class="topbar-toggle-icon">
                                <a class="topbar-toggle-hamburger" href="javascript:void(0)">
                                    <img src="{{ url('/') }}/assets/dashboard/images/svg-icon/horizontal.svg" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                    <img src="{{ url('/') }}/assets/dashboard/images/svg-icon/verticle.svg" class="img-fluid menu-hamburger-vertical" alt="verticle">
                                 </a>
                             </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="menubar">
                                <a class="menu-hamburger" href="javascript:void(0)">
                                    <img src="{{ url('/') }}/assets/dashboard/images/svg-icon/collapse.svg" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                    <img src="{{ url('/') }}/assets/dashboard/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">
                                 </a>
                             </div>  
                        </li>                                
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Topbar -->
    <div class="topbar">
        <!-- Start row -->
        <div class="row align-items-center">
            <!-- Start col -->
            <div class="col-md-12 align-self-center">
                <div class="togglebar">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <div class="menubar">
                                <a class="menu-hamburger" href="javascript:void(0)">
                                   <img src="{{ url('/') }}/assets/dashboard/images/svg-icon/collapse.svg" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                   <img src="{{ url('/') }}/assets/dashboard/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">  
                                 </a>
                             </div>
                        </li>
                        
                    </ul>
                </div>
                <div class="infobar">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <div class="settingbar">
                                <!-- <a href="javascript:void(0)" id="infobar-settings-open" class="infobar-icon"> -->
                                <a class="infobar-icon">
                                    <img src="{{ url('/') }}/assets/dashboard/images/svg-icon/settings.svg" class="img-fluid" alt="settings">
                                </a>
                            </div>
                        </li>

                        <li class="list-inline-item">
                            <div class="languagebar">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="languagelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag flag-icon-us flag-icon-squared"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languagelink">

                                    </div>
                                </div>
                            </div>                                   
                        </li>

                    </ul>
                </div>
            </div>
            <!-- End col -->
        </div> 
        <!-- End row -->
    </div>
    <!-- End Topbar -->
    @yield('rightbar-content')
    <!-- Start Footerbar -->
    <div class="footerbar">
        <footer class="footer">
            <p class="mb-0">© 2020 Development Here - CRUD for Cars and Drivers.</p>
        </footer>
    </div>
    <!-- End Footerbar -->
</div>

