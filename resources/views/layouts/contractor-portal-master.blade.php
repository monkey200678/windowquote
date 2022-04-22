<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Booking Admin">
    <meta name="keywords" content="Booking Admin">
    <meta name="author" content="Ivan">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Movie Management')</title>
    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/horizontal-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/extensions/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/validation/form-validation.css') }}">
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- END: Vendor CSS-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

    @yield('page-style')
</head>
<!-- END: Head-->

{{--<!-- BEGIN: Body-->--}}
<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

<!-- BEGIN: Header-->
<div class="container-fluid">
        <div class="row">
            <div class="col-md-5 col-12" style="display:grid;">
                <p class="font-6" style="font-size:30px;line-height:normal;">
                    <span style="font-size:32px;">
                        <span style="font-family: helvetica-w01-bold, helvetica-w02-bold, helvetica-lt-w10-bold, sans-serif">
                            <span style="font-family:oswald-medium,oswald,sans-serif;font-weight: bold; color: rgb(255,255,255);left:57%;position:relative;top:24px;font-weight: bold">
                                <span style="color: #445265;font-weight: inherit">
                                    <a href="{{ route('frontend.home') }}" target="_self" style="color: inherit;font-weight: bold;text-decoration:none">YOUR</a>
                                </span>
                                <span style="color: #f77055;background: transparent">
                                    <a href="{{ route('frontend.home') }}" target="_self" style="color: inherit;text-decoration:none">WINDOW</a>
                                </span>
                                <span style="color: #445265">
                                    <a href="{{ route('frontend.home') }}" target="_self" style="color: inherit;text-decoration:none">QUOTE.COM</a>
                                </span>
                            </span>
                        </span>
                    </span>
                </p>
            </div>
        </div>
    </div>

    <div class="mt-5 d-flex justify-content-center align-items-center">
        <div class="p-1 dropDown" style="border-right:1px solid blue">
            <a href="{{ route('front.contractor-portal-home') }}" class="mx-3 text-uppercase dropBtn" style="color:#445265">
                home
            </a>
            <div class="dropdownContent">
                <a href="{{ route('front.contractor-profile') }}">PROFILE</a>
                <a href="{{ route('front.contractor-jobs') }}">JOBS</a>
                <a href="{{ route('front.contractor-store') }}">YOUR STUFF</a>
                <a href="#">MEMEBERSHIP</a>
            </div>
        </div>
        <div class="p-1" style="border-right:1px solid blue">
            <a href="#" class="mx-3 text-uppercase" style="color:#445265">shop</a>
        </div>
        <div class="p-1">
            <a href="#" class="mx-3 text-uppercase" style="color:#445265">faq</a>
        </div>
    </div>
</div>
<!-- END: Header-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        @yield('content')
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>




<!-- END: Content-->

<!-- BEGIN: Vendor JS-->

<script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('app-assets/js/core/app.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/components.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
{{-- Page js files --}}
<script src="{{ asset('app-assets/js/scripts/forms/validation/form-validation.js') }}"></script>
<!-- END: Theme JS-->
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script>
    $(document).ready(function() {
            toastr.options.timeOut = 1000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}')
            @endif
        });
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
    });
</script>

@yield('page-script')
@include('layouts.notify')
</body>
<!-- END: Body-->

</html>
