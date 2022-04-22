@extends('layouts.frontend-master')
@section('title', 'Main calculator')
@section('page-style')

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-5">
                    <div class="card-header" style="justify-content: center !important;">
                        <h4 class="card-title main-calc-title text-uppercase logo-color home-heading alternate-font" style="font-size: 2.25rem;text-shadow: none;font-weight:200;color:rgba(68,82,101,1);border-bottom: 2px solid orange;">select style for your quote in {{ Session::get('state') }}</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="form-group row mt-3 main-calc align-items-center" style="justify-content:space-around;">
                                    <a href="{{ route('front.sub-calc', 'c') }}">
                                        <div class="img-section">
                                            <img style="width:13rem;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_W_G.png') }}" />
                                        </div>
                                        <h5 class="text-uppercase text-center alternate-font">casement</h5>
                                    </a>
                                    <a href="{{ route('front.individual-calc','dh') }}">
                                        <div class="img-section flex-column">
                                            <img style="height: 13rem;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHW_2O0.png') }}" alt="double hung" />
                                        </div>
                                        <h5 class="text-uppercase text-center alternate-font">double hung</h5>
                                    </a>
                                    <a href="{{ route('front.sub-calc', 'sl') }}">
                                        <div class="img-section">
                                            <img style="width:13rem" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_W_G.png') }}" alt="sliding window"/>
                                        </div>
                                        <h5 class="text-uppercase text-center alternate-font">sliding window</h5>
                                    </a>
                                    <a href="{{ route('front.individual-calc', 'pw') }}">
                                        <div class="img-section">
                                            <img style="width:13rem" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_W_G.png') }}" alt="picture window"/>
                                        </div>
                                        <h5 class="text-uppercase text-center alternate-font">picture window</h5>
                                    </a>
                                    <a href="{{ route('front.sub-calc', 'patio') }}">
                                        <div class="img-section">
                                            <img style="height:13em;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW5G.png') }}" />
                                        </div>
                                        <h5 class="text-uppercase text-center alternate-font">patio door</h5>
                                    </a>
                            </div>
                            <div class="row align-items-center" style="justify-content: space-around">
                                    <a href="{{ route('front.individual-calc', 'aw') }}">
                                        <div class="img-section">
                                            <img style="width:13rem;height:13rem;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/AWING/AWING_W_G.png') }}" alt="awning window" />
                                        </div>
                                        <h5 class="text-uppercase text-center alternate-font">awning window</h5>
                                    </a>
                                    <a href="{{ route('front.individual-calc', 'gw') }}">
                                        <div class="img-section">
                                            <img style="height:13em;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/GARDEN/GARDEN_W_G.png') }}" alt="garden window" />
                                        </div>
                                        <h5 class="text-uppercase text-center alternate-font">garden window</h5>
                                    </a>
                                    <a href="{{ route('front.sub-calc', 'ba') }}">
                                        <div class="img-section">
                                            <img src="{{ asset('img/WINDOW_QUOTE_PICTURES/BAY/badh_center.png') }}" style="width: 22rem;height:13rem;"/>
                                        </div>
                                        <h5 class="text-uppercase text-center alternate-font">bay window</h5>
                                    </a>
                                    <a href="{{ route('front.sub-calc', 'bo') }}">
                                        <div class="img-section">
                                            <img src="{{ asset('img/WINDOW_QUOTE_PICTURES/BOW/bow_w3.png') }}" style="width:13rem;height:13rem;" />
                                        </div>
                                        <h5 class="text-uppercase text-center alternate-font">bow window</h5>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-script')

@endsection
