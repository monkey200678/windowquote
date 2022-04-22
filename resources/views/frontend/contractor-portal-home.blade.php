@extends('layouts.contractor-portal-master')
@section('title', 'Home')
@section('page-style')

@endsection
@section('content')
        <div class="row">
            <div class="col-md-8 d-flex justify-content-center">
                <h3 class="text-uppercase" style="color:tomato;">lyons windows</h3>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <h1 class="text-uppercase text-center" style="color:#445265;font-size: 4rem;font-family:system-ui;">welcome back</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row mt-1 justify-content-center align-items-center">
                        <a href="{{ route('front.contractor-store') }}"><div class="m-1 text-uppercase d-flex align-items-center justify-content-center font-weight-bold" style="font-size:2.5rem;background-color:green;width:27rem;height:15rem;color:white">store</div></a>
                        <a href="{{ route('front.contractor-jobs') }}"><div class="text-uppercase d-flex align-items-center justify-content-center font-weight-bold" style="font-size:2.5rem;background-color: tomato;width:27rem;height:15rem;color:white">my jobs</div></a>
                </div>
                <div class="row justify-content-center align-items-center">
                        <a href="{{ route('front.contractor-profile') }}"><div class="m-1 text-uppercase d-flex align-items-center justify-content-center font-weight-bold" style="font-size:2.5rem;background-color:blue;width:27rem;height:15rem;color:white">my profile</div></a>
                        <a href="{{ route('front.contractor-benefits') }}"><div class="text-uppercase d-flex align-items-center justify-content-center font-weight-bold" style="font-size:2.5rem;background-color:purple;width:27rem;height:15rem;color: white">my benefits</div></a>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-2">
                <div class="mt-3 d-flex justify-content-around align-items-center">
                    <div>
                        <img src="https://static.wixstatic.com/media/a1b09fe8b7f04378a9fe076748ad4a6a.png/v1/fill/w_27,h_27,al_c,usm_0.66_1.00_0.01,enc_auto/a1b09fe8b7f04378a9fe076748ad4a6a.png" alt="YouTube" style="width:30px;height:30px;object-fit:cover;object-position:50% 50%">
                    </div>
                    <div>
                        <img src="https://static.wixstatic.com/media/e316f544f9094143b9eac01f1f19e697.png/v1/fill/w_27,h_27,al_c,usm_0.66_1.00_0.01,enc_auto/e316f544f9094143b9eac01f1f19e697.png" alt="Facebook" style="width:30px;height:30px;object-fit:cover;object-position:50% 50%">
                    </div>
                    <div>
                        <img src="https://static.wixstatic.com/media/9c4b521dd2404cd5a05ed6115f3a0dc8.png/v1/fill/w_27,h_27,al_c,usm_0.66_1.00_0.01,enc_auto/9c4b521dd2404cd5a05ed6115f3a0dc8.png" alt="Twitter" style="width:30px;height:30px;object-fit:cover;object-position:50% 50%">
                    </div>
                    <div>
                        <img src="https://static.wixstatic.com/media/9f9c321c774844b793180620472aa4f1.png/v1/fill/w_27,h_27,al_c,usm_0.66_1.00_0.01,enc_auto/9f9c321c774844b793180620472aa4f1.png" alt="Instagram" style="width:30px;height:30px;object-fit:cover;object-position:50% 50%">
                    </div>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
@endsection

@section('page-script')

@endsection

