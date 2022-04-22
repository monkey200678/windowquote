@extends('layouts.frontend-master')
@section('title', 'Home')
@section('page-style')

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card p-5">
                    <div class="card-header" style="justify-content: stretch !important;">
                        @if($calc_type == 'patio')
                            <h4 class="card-title text-uppercase home-heading" style="width:100%;text-shadow: none;font-weight:100;text-transform:uppercase;border-bottom:1px solid tomato;">patio door</h4>
                        @elseif($calc_type == 'ba')
                            <h4 class="card-title text-uppercase home-heading" style="width:100%;text-shadow: none;font-weight:100;text-transform:uppercase;border-bottom:1px solid tomato;">bay window</h4>
                        @elseif($calc_type == 'bo')
                            <h4 class="card-title text-uppercase home-heading" style="width:100%;text-shadow: none;font-weight:100;text-transform:uppercase;border-bottom:1px solid tomato;">bow window</h4>
                        @else($calc_type == 'sl')
                            <h4 class="card-title text-uppercase home-heading" style="width:100%;border-bottom:1px solid tomato;font-weight:100;text-transform:uppercase;text-shadow: none;">sliding window</h4>
                        @endif
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="form-group row mt-3">
                                @if($calc_type == 'sl')
                                    <div class="col-md-6 text-center sub-calc">
                                        <a href="{{ route('front.individual-calc', 'sw2') }}">
                                            <div class="img-section">
                                                <img style="height:13em;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_W.png') }}" alt="sl2"/>
                                            </div>
                                            <h3 class="text-uppercase alternate-font">Double Casement</h3>
                                        </a>
                                    </div>
                                    <div class="col-md-6 text-center sub-calc">
                                        <a href="{{ route('front.individual-calc', 'sw3') }}">
                                            <div class="img-section">
                                                <img style="height:13em;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_W.png') }}" alt="sl3" />
                                            </div>
                                            <h3 class="text-uppercase alternate-font">Tripple Casement</h3>
                                        </a>
                                    </div>
                                @elseif($calc_type == 'patio')
                                    <div class="col-md-4 text-center sub-calc">
                                        <a href="{{ route('front.individual-calc-second', 'patio1') }}">
                                            <div class="grid-container">
                                                <div class="grid-item1">
                                                    <img style="width:100%;height:20em;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW5G.png') }}" alt="PATIO3"/>
                                                </div>
                                                <div class="grid-item2" style="color:black;">79"</div>
                                                <div class="grid-item3">
                                                    <h3 class="text-uppercase">60"</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 text-center sub-calc">
                                        <a href="{{ route('front.individual-calc-second', 'patio2') }}">
                                            <div class="grid-container">
                                                <div class="grid-item1">
                                                    <img style="width:100%;height:20em;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW6G.png') }}" alt="PATIO3"/>
                                                </div>
                                                <div class="grid-item2" style="color:black;">79"</div>
                                                <div class="grid-item3">
                                                    <h3 class="text-uppercase">72"</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 text-center sub-calc">
                                        <a href="{{ route('front.individual-calc-second', 'patio3') }}">
                                            <div class="grid-container">
                                                <div class="grid-item1">
                                                    <img style="width:100%;height:20em;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW8G.png') }}" alt="PATIO3"/>
                                                </div>
                                                <div class="grid-item2" style="color:black;">79"</div>
                                                <div class="grid-item3">
                                                    <h3 class="text-uppercase">96"</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @elseif($calc_type == 'c')
                                    <div class="col-md-4 text-center sub-calc">
                                        <a href="{{ route('front.individual-calc', 'c1') }}">
                                            <div class="img-section d-flex align-items-center justify-content-center">
                                                <img style="height:13em;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_W.png') }}" />
                                            </div>
                                            <h3 class="text-uppercase">1 Panel</h3>
                                        </a>
                                    </div>
                                    <div class="col-md-4 text-center sub-calc">
                                        <a href="{{ route('front.individual-calc', 'c2') }}">
                                            <div class="img-section d-flex justify-content-center align-items-center">
                                                <img style="width:13em;height:13em;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_W.png') }}" />
                                            </div>
                                            <h3 class="text-uppercase">2 Panel</h3>
                                        </a>
                                    </div>
                                    <div class="col-md-4 text-center sub-calc">
                                        <a href="{{ route('front.individual-calc', 'c3') }}">
                                            <div class="img-section d-flex justify-content-center align-items-center">
                                                <img style="width:13em;height:13em;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_W.png') }}" />
                                            </div>
                                            <h3 class="text-uppercase">3 Panel</h3>
                                        </a>
                                    </div>
                                @elseif($calc_type == 'ba')
                                    <div class="col-md-6 text-center sub-calc">
                                        <a href="{{ route('front.individual-calc', 'badh') }}">
                                            <div class="img-section">
                                                <img src="{{ asset('img/WINDOW_QUOTE_PICTURES/BAY/badh_center.png') }}" style="width: 100%;"/>
                                            </div>
                                            <h3 class="text-uppercase">Bay with Double Hung sides</h3>
                                        </a>
                                    </div>
                                    <div class="col-md-6 text-center sub-calc">
                                        <a href="{{ route('front.individual-calc', 'bac') }}">
                                            <div class="img-section">
                                                <img src="{{ asset('img/WINDOW_QUOTE_PICTURES/BAY/baca_center.png') }}" style="width: 100%;"/>
                                            </div>
                                            <h3 class="text-uppercase alternate-font">Bay with Casement sides</h3>
                                        </a>
                                    </div>
                                @elseif($calc_type == 'bo')
                                    <div class="col-md-4 text-center sub-calc">
                                        <a href="{{ route('front.individual-calc', 'bo3') }}">
                                            <div class="img-section">
                                                <img src="{{ asset('img/WINDOW_QUOTE_PICTURES/BOW/bow_w3.png') }}" style="width: 55%;"/>
                                            </div>
                                            <h3 class="text-uppercase">3 panel</h3>
                                        </a>
                                    </div>
                                    <div class="col-md-4 text-center sub-calc">
                                        <a href="{{ route('front.individual-calc', 'bo4') }}">
                                            <div class="img-section">
                                                <img src="{{ asset('img/WINDOW_QUOTE_PICTURES/BOW/bow_w4.png') }}" style="width: 70%;"/>
                                            </div>
                                            <h3 class="text-uppercase">4 panel</h3>
                                        </a>
                                    </div>
                                    <div class="col-md-4 text-center sub-calc">
                                        <a href="{{ route('front.individual-calc', 'bo5') }}">
                                            <div class="img-section">
                                                <img src="{{ asset('img/WINDOW_QUOTE_PICTURES/BOW/bow_straight.png') }}" style="width: 80%;"/>
                                            </div>
                                            <h3 class="text-uppercase">5 panel</h3>
                                        </a>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group row justify-content-center">
                                <a href="{{ route('front.main-calc', $initialize=0) }}" class="btn btn-warning btn-yellow">Start Over</a>
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
