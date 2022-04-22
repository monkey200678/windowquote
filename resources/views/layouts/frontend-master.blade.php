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
<div class="container-fluid" style="background-color:rgba(68,82,101,1);height:225px; width:100%" id="wrapper">
        <div class="row">
            <div class="col-md-5 col-12" style="display:grid;">
                <p class="font-6" style="font-size:30px;line-height:normal;">
                    <span style="font-size:32px;">
                        <span style="font-family: helvetica-w01-bold, helvetica-w02-bold, helvetica-lt-w10-bold, sans-serif">
                            <span style="font-family:oswald-medium,oswald,sans-serif;font-weight: bold; color: rgb(255,255,255);left:57%;position:relative;top:24px;font-weight: bold">
                                <span style="color: inherit;font-weight: inherit">
                                    <a href="{{ route('frontend.home') }}" target="_self" style="color: inherit;font-weight: bold;text-decoration:none">YOUR</a>
                                </span>
                                <span style="color: #f77055;background: transparent">
                                    <a href="{{ route('frontend.home') }}" target="_self" style="color: inherit;text-decoration:none">WINDOW</a>
                                </span>
                                <span style="color: rgb(255,255,255)">
                                    <a href="{{ route('frontend.home') }}" target="_self" style="color: inherit;text-decoration:none">QUOTE.COM</a>
                                </span>
                            </span>
                        </span>
                    </span>
                </p>
            </div>
            <div class="col-md-2 col-12" style="display:flex;align-items:center;justify-content:center;"><img src="{{asset("img/STAR.webp")}}" style="position:relative;top: 63%;"></div>
            <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 col-12" style="font-size: 33px;font-weight: bold;font-family:sans-serif;color: rgb(255,255,255);text-align:center;top:39px;">SAVING YOU TIME AND MONEY</div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="top: 46px;display:flex;justify-content:center;align-items:center;">
                <nav style="display:flex; flex-direction: column;vertical-align: baseline;margin:0;padding:0;outline:0;border:0;">
                    <ul id="navWrapper" style="list-style:none;margin:0;padding:0;white-space:nowrap;overflow:visible;background-color: rgba(199,199,199,0.39);border-radius:10px;display:flex;justify-content:center;align-items:center;">
                        <li id="target" class="navbtn" style="margin:0;padding:0;width: 135px; height: 50px;border-top-left-radius:10px; border-bottom-left-radius:10px;border-right: 1px solid white;">
                            <a href="{{ route('frontend.home') }}" style="margin:0;padding:0;cursor: pointer; text-decoration: none;font-family: Arial,Helvetica,sans-serif;">
                                <div style="padding: 0 5px;padding: 0 5px;">
                                    <div style="text-align: center;margin: 0; padding: 0; border: 0;outline: 0;display:block">
                                        <a href="{{ route('front.main-calc', $initialize = 1) }}"><p style="color:white;padding:0 10px;text-align: center; line-height: 50px">HOME</p></a>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="navbtn" style="border-right: 1px solid white;margin:0;padding:0;width: 164px;height: 50px;background-color: transparent;">
                            <a href="#" style="margin:0;padding:0;display: inline-block; height: 100%; width: 100%; cursor: pointer; text-decoration: none;font-family: Arial,Helvetica,sans-serif;">
                                <div style="padding: 0 5px;padding: 0 5px;">
                                    <div style="text-align: center;margin: 0; padding: 0; border: 0;outline: 0;display: block">
                                        <p style="color:black;padding: 0 10px; text-align: center; line-height: 50px">WINDOWS</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li  class="navbtn" style="border-right:1px solid white;margin:0;padding:0;width: 152px; height: 50px;background-color: transparent;">
                            <a href="#" style="display: inline-block; height: 100%; width: 100%; cursor: pointer; text-decoration: none;font-family: Arial,Helvetica,sans-serif;">
                                <div style="padding: 0 5px;padding: 0 5px;">
                                    <div style="text-align: center;margin: 0; padding: 0; border: 0;outline: 0;display: block">
                                        <p style="color:black;padding: 0 10px; text-align: center; line-height: 50px">INSTALL</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="navbtn" style="border-right:1px solid white;width: 150px; height: 50px;background-color: transparent;">
                            <a href="#" style="display: inline-block; height: 100%; width: 100%; cursor: pointer; text-decoration: none;font-family: Arial,Helvetica,sans-serif;">
                                <div style="padding: 0 5px;padding: 0 5px;">
                                    <div style="text-align: center;margin: 0; padding: 0; border: 0;outline: 0;display: block">
                                        <p style="color:black;padding: 0 10px; text-align: center; line-height: 50px">WHY US</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="navbtn" style="border-right:1px solid white;width: 177px; height: 50px;background-color: transparent;">
                            <a href="#" style="display: inline-block; height: 100%; width: 100%; cursor: pointer; text-decoration: none;font-family: Arial,Helvetica,sans-serif;">
                                <div style="padding: 0 5px;padding: 0 5px;">
                                    <div style="text-align: center;margin: 0; padding: 0; border: 0;outline: 0;display: block">
                                        <p style="color:black;padding: 0 10px; text-align: center; line-height: 50px">UNIVERSITY</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="navbtn" style="width: 120px; height: 50px;background-color: transparent;border-top-right-radius: 10px;border-bottom-right-radius: 10px">
                            <a href="#" style="display: inline-block; height: 100%; width: 100%; cursor: pointer; text-decoration: none;font-family: Arial,Helvetica,sans-serif;">
                                <div style="padding: 0 5px;padding: 0 5px;">
                                    <div style="text-align: center;margin: 0; padding: 0; border: 0;outline: 0;display: block">
                                        <p style="color:black;padding: 0 10px; text-align: center; line-height: 50px">FAQ</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row"></div>
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
