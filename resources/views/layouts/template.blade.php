<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="/images/core-img/favicon.png">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
<!-- Preloader -->
<div id="preloader"></div>
    @include('layouts.undex._chose_layout')

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="ecaps-page-wrapper">
        <!-- Sidemenu Area -->
        @include('layouts.undex._sidemenu')
    </div>

    <!-- Page Content -->
    <div class="ecaps-page-content">
        <!-- Top Header Area -->
        @include('layouts.undex._top_header')

        <div class="row">
            <div class="col-12">
                @include('layouts.undex.dashboard_header')
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="main-content dashboard-pt">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12" id="app">
                        @yield('content')
                    </div><!-- end col-->
                </div>


            </div>

            <!-- Footer Area -->
            <div class="container-fluid">
                @include('layouts.undex._footer')
            </div>
        </div>
    </div>
</body>
<!-- ======================================
********* Page Wrapper Area End ***********
======================================= -->

<!-- Must needed plugins to the run this Template -->
<script src="/js/app.js"></script>
<script src="/js/jquery.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/bundle.js"></script>

<!-- Active JS -->
<script src="/js/default-assets/fullscreen.js"></script>
<script src="/js/default-assets/active.js"></script>

<!-- These plugins only need for the run this page -->
{{--<script src="/js/default-assets/jquery.flot.js"></script>
<script src="/js/default-assets/jquery.flot.resize.js"></script>
<script src="/js/default-assets/chart.min.js"></script>
<script src="/js/default-assets/sparkline.min.js"></script>
<script src="/js/default-assets/component-todo.js"></script>
<script src="/js/default-assets/apexchart.min.js"></script>
<script src="/js/default-assets/dashboard-active.js"></script>
<script src="/js/default-assets/dashboard-active-2.js"></script>
<script src="/js/default-assets/custom-sparkline.js"></script>
<script src="/js/default-assets/dashboard-chat.js"></script>
<script src="/js/default-assets/jquery.datatables.min.js"></script>
<script src="/js/default-assets/datatables.bootstrap4.js"></script>
<script src="/js/default-assets/datatable-responsive.min.js"></script>
<script src="/js/default-assets/responsive.bootstrap4.min.js"></script>
<script src="/js/default-assets/demo.datatable-init.js"></script>--}}

{{--<script src="/js/default-assets/jquery.datatables.min.js"></script>
<script src="/js/default-assets/datatables.bootstrap4.js"></script>
<script src="/js/default-assets/datatable-responsive.min.js"></script>
<script src="/js/default-assets/responsive.bootstrap4.min.js"></script>
<script src="/js/default-assets/demo.datatable-init.js"></script>--}}
@yield('js')

</html>
