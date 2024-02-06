{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fintech</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm" style="background-color: #101C51">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="font-weight: bold; color: white">
                    Fintech
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @auth

                            @if (Auth::user()->role_id === 3)
                                <li class="nav-item">
                                    <a class="nav-link {{ $page == 'Home' ? 'active' : '' }}" aria-current="page"
                                        href="{{ route('home') }}">Home</a>
                                </li>
                            @endif
                            @if (Auth::user()->role_id === 2)
                                <li class="nav-item">
                                    <a class="nav-link {{ $page == 'Home' ? 'active' : '' }}" aria-current="page"
                                        href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ $page == 'Menu' ? 'active' : '' }}"
                                        href="{{ route('menu') }}">Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ $page == 'Menu' ? 'active' : '' }}"
                                        href="{{ route('data_transaksi') }}">Data Transaksi</a>
                                </li>
                            @endif
                            @if (Auth::user()->role_id === 1)
                                <li class="nav-item">
                                    <a class="nav-link {{ $page == 'Home' ? 'active' : '' }}" aria-current="page"
                                        href="{{ route('home') }}">Home</a>
                                </li>
                            @endif
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown" style="color: white">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} ({{ Auth::user()->role->name }})
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html> --}}

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Fintech</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assetss/images/favicon.png') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('/assetss/plugins/chartist/dist/chartist.min.css" rel="stylesheet') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- [if lt IE 9]> -->
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<!-- <![endif]--> 
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ===================================?=========================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{asset ('assetss/images/logo-icon.png')}}" alt="homepage" class="dark-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="{{asset('assetss/images/fortey.png')}}" alt="homepage" class="dark-logo" width="155" height="110" />

                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <!-- <li class="nav-item hidden-sm-down">
                            <form class="app-search ps-3">
                                <input type="text" class="form-control" placeholder="Search for..."> <a
                                    class="srh-btn"><i class="ti-search"></i></a>
                            </form>
                        </li> -->
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown" style="color: white">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} ({{ Auth::user()->role->name }})
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                    @auth

                        @if (Auth::user()->role_id === 3)
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link {{ $page == 'Home' ? 'active' : '' }}"
                                href="{{ route('home') }}" aria-expanded="false"><i class="me-3 fas fa-home"
                                    aria-hidden="true"></i><span class="hide-menu">Home</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link {{ $page == 'Top Up' ? 'active' : '' }}"
                                href="{{ route('topup') }}" aria-expanded="false"><i class="me-3 fas fa-donate"
                                    aria-hidden="true"></i><span class="hide-menu">Top Up</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link {{ $page == 'Tarik Tunai' ? 'active' : '' }}"
                                href="{{ route('tariktunai') }}" aria-expanded="false"><i class="me-3  fab fa-cc-amazon-pay"
                                    aria-hidden="true"></i><span class="hide-menu">Tarik Tunai</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link {{ $page == 'Canteen' ? 'active' : '' }}"
                                href="{{ route('transaksi') }}" aria-expanded="false"><i class="me-3 fas fa-shopping-cart"
                                    aria-hidden="true"></i><span class="hide-menu">Canteen</span></a>
                        </li>
                        @endif
                        @if (Auth::user()->role_id === 2)
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link {{ $page == 'Home' ? 'active' : '' }}"
                                href="{{ route('home') }}" aria-expanded="false">
                                <i class="me-3 fas fa-home" aria-hidden="true"></i><span
                                    class="hide-menu">Home</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link {{ $page == 'Menu' ? 'active' : '' }}"
                                href="{{ route('menu') }}" aria-expanded="false"><i class="me-3 fa fas fa-coffee"
                                    aria-hidden="true"></i><span class="hide-menu">Menu</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link {{ $page == 'Data Transaksi' ? 'active' : '' }}"
                                href="{{ route('data_transaksi') }}" aria-expanded="false"><i class="me-3 fa fas fa-clipboard"
                                    aria-hidden="true"></i><span class="hide-menu">Data Transaksi</span></a>
                        </li>
                        @endif
                        @if (Auth::user()->role_id === 1)
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link {{ $page == 'Home' ? 'active' : '' }}"
                            href="{{ route('home') }}" aria-expanded="false">
                            <i class="me-3 fas fa-home" aria-hidden="true"></i><span
                                class="hide-menu">Home</span></a>
                        </li>
                            {{-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link {{ $page == 'Data Transaksi' ? 'active' : '' }}"
                                href="{{ route('data_transaksi') }}" aria-expanded="false">
                                <i class="me-3 fas fa-dollar-sign" aria-hidden="true"></i><span
                                    class="hide-menu">Data Transaksi</span></a>
                            </li> --}}
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link {{ $page == 'Data Bank' ? 'active' : '' }}"
                            href="{{ route('data_bank') }}" aria-expanded="false">
                            <i class="me-3 fas fa-credit-card" aria-hidden="true"></i><span
                                class="hide-menu">Data Bank</span></a>
                        </li>
                        @endif
                    @endauth
                    </ul>
                   
                    <!-- <ul class="navbar-nav ms-auto">
                         Authentication Links -->
                        <!-- @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown" style="color: white">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} ({{ Auth::user()->role->name }})
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest -->
                    <!-- </ul> -->
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
        <main class="py-4">
            @yield('content')
        </main>
        </div>
        </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('/assetss/plugins/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('/assetss/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/js/app-style-switcher.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('/js/custom.js') }}"></script>
    <!--This page JavaScript -->
    <!--flot chart-->
    <script src="{{ asset('/assetss/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('/assetss/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('/js/pages/dashboards/dashboard1.js') }}"></script>
</body>

</html>
