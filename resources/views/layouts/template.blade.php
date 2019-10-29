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
                <div class="col-12">
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
</div>


@yield('js')
</body>

</html>
