<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar">
{{--    <na style="background: #01cbd5;" class="navbar top-navbar navbar-expand-md navbar-light">--}}
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <!-- Logo icon -->
{{--                <b class="text-white">--}}
{{--                    <img style="width: 55px;"  src="{{asset('images/logohouseview.png')}}"--}}
{{--                    alt="homepage"--}}
{{--                    />--}}
{{--                   --}}
{{--                </b>--}}
                <!--End Logo icon -->
                <!-- Logo text -->
                <span >
                    <img style="width: 100px;"  src="{{asset('images/logohouseview.png')}}"
                         alt="homepage"
                         class="dark-logo"/>
                    <!-- Light Logo icon -->
                    <img style="width: 150px;"  src="{{asset('images/logohouseview.png')}}"
                         alt="homepage" class="light-logo"/>
                    <!-- dark Logo text -->
                   
                </span>
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto mt-md-0">
                <!-- This is  -->
                @if(true)
                <li class="nav-item">
                    <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                       href="javascript:void(0)"
                    >
                        <i class="mdi mdi-menu"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark"
                       href="javascript:void(0)"
                    >
                        <i class="ti-menu"></i>
                    </a>
                </li>
                @endif
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
               {{--  @includeWhen(true, 'templates.application.components.navbar-search') --}}
                <!-- ============================================================== -->
                <!-- End Search -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Megamenu -->
                <!-- ============================================================== -->
                {{-- @includeWhen(true, 'templates.application.components.navbar-megamenu') --}}
                <!-- ============================================================== -->
                <!-- End Megamenu -->
                <!-- ============================================================== -->
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            {{-- <ul class="navbar-nav my-lg-0">
                <!-- ============================================================== -->
                <!-- Comment -->
                <!-- ============================================================== -->
                @includeWhen(true, 'templates.application.components.navbar-comments')
                <!-- ============================================================== -->
                <!-- End Comment -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Messages -->
                <!-- ============================================================== -->
                @includeWhen(true, 'templates.application.components.navbar-messages')
                <!-- ============================================================== -->
                <!-- End Messages -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Profile -->
                <!-- ============================================================== -->
                @includeWhen(true, 'templates.application.components.navbar-profile')
                <!-- ============================================================== -->
                <!-- End Profile -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Language -->
                <!-- ============================================================== -->
                @includeWhen(true, 'templates.application.components.navbar-lang')
                <!-- ============================================================== -->
                <!-- End Language -->
                <!-- ============================================================== -->
            </ul> --}}
        </div>
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
