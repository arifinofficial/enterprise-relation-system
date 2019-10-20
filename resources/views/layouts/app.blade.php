<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content="Arifin N" name="description">
    <meta content="Arifin N" name="author">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!--Chartist Chart CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    @stack('head-scripts')
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        @include('layouts._partials.nav-top')
        @include('layouts._partials.nav-left')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
        @yield('content')
        <!-- ============================================================== -->
            <footer class="footer">© 2019 All Rights Reserved. <span class="d-none d-sm-inline-block"> Code with <i class="mdi mdi-heart text-danger"></i> by Arifin N</span>.</footer>
        </div>
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->
    <!-- jQuery  -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('js/waves.min.js') }}"></script>
    @include('sweetalert::alert')
    @stack('body-scripts')
    <!-- App js -->
    <script src="{{ asset('js/js.js') }}"></script>
</body>

</html>