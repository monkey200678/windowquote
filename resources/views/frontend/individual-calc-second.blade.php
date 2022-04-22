@extends('layouts.frontend-master')
@section('title', 'Individual Calculator')
@section('page-style')

@endsection
@section('content')
    <div class="container">
        <div class="card p-5">
            <div class="row" style="border-bottom:1px solid orange;">
                <div class="col-md-6">
                    <h1 class="alternate-font text-center text-uppercase home-heading" style="color:#445265">
                        @include('frontend.partial.individual-title')
                    </h1>
                </div>
                <div class="col-md-6">
                    <h1 class="alternate-font home-heading text-center text-uppercase" style="color:#445265">
                        color & grid
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div class="grid-container my-5">
                            <div class="grid-item1">
                                @include('frontend.partial.individual-image')
                            </div>
                            @if($calc_type == 'patio1' || $calc_type == 'patio2' || $calc_type == 'patio3')
                                <div class="grid-item2" style="display:none;">{{ Session::get('height')??old('height') }}"</div>
                                <div class="grid-item3" style="display:none;">{{ Session::get('width')??old('width') }}"</div>
                            @else
                                <div class="grid-item2">{{ Session::get('height')??old('height') }}"</div>
                                <div class="grid-item3">{{ Session::get('width')??old('width') }}"</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="d-flex flex-column align-items-center">
                        
                        <div class="my-5 d-flex">
                            <h1 class="alternate-font text-uppercase" style="color:tomato;">color:</h1>
                            <ul style="list-style:none">
                                <li class="win-color alternate-font" id="w-w" style="text-transform:uppercase;font-size:20px;">white / white</li>
                                <li class="win-color alternate-font" id="b-w" style="text-transform:uppercase;font-size:20px;">black / white</li>
                                <li class="win-color alternate-font" id="t-t" style="text-transform:uppercase;font-size:20px;">tan / tan</li>
                            </ul>
                        </div>
                        <div class="mt-3 d-flex">
                            <h1 class="alternate-font text-uppercase text-sm-center" style="color:tomato;">grids:&nbsp;&nbsp;</h1>
                            <ul class="d-flex" style="list-style:none;">
                                <li class="alternate-font" id="trigger" class="indicator" style="text-transform:uppercase;font-size:20px;">Yes</li>
                                <li class="alternate-font mx-1 text-uppercase" id="no_trigger" class="mx-2 indicator" style="font-size: 20px;">No</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col-md-12 my-5 d-flex justify-content-center align-items-center btn-mobile">
                            <a href="{{ url()->previous() }}" class="btn btn-outline-warning mx-2"
                                style="border-radius:50%;line-height:3em;"><i class="fas fa-arrow-left"></i></a>
                            <form action="{{ route('front.individual-calc-fourth', $calc_type) }}" method="post">
                                @csrf
                                <input type="hidden" id="brokker" name="original" value="{{ $calc_type }}">
                                <input type="hidden" id="publisher" value="">
                                <input type="hidden" id="dispatcher" name="window_type" value="">
                                <button type="submit" class="btn btn-outline-warning" style="line-height:3em;border-radius:50%;">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
@endsection
