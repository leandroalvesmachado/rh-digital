<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>RH Digital | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/admin.js') }}" defer></script>
</head>
<body data-sidebar="dark">
    <!-- Loader -->
    @include('layouts.partials.preloader')
    <!-- Loader End -->

    <!-- Page -->
    <div id="layout-wrapper">
        <!-- Header -->
        @include('layouts.partials.header')
        <!-- Header End -->

        <!-- Menu -->
        @include('layouts.partials.menu')
        <!-- Menu End -->

        <!-- Content -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('breadcrumb')
                    @yield('content')
                </div>
            </div>
            <!-- Footer -->
            @include('layouts.partials.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->
    </div>
    <!-- Page End -->

    <!-- Right Sidebar -->
    <div class="right-bar">
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
</body>
</html>
