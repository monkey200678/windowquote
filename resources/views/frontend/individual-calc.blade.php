@extends('layouts.frontend-master')
@section('title', 'Individual Calculator')
@section('page-style')

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card p-5">
                    <div class="card-header" style="justify-content: center !important;">
                        <h1 class="text-uppercase logo-color home-heading" style="color:#445265;border-bottom: 2px solid tomato; text-shadow:none;">@include('frontend.partial.individual-title')</h1>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                @if($calc_type !== 'badh')
                                    <div class="img-section d-flex justify-content-center align-items-center flex-column">
                                        @include('frontend.partial.individual-image')
                                    </div>
                                @else
                                    <div class="img-section d-flex justify-content-center align-items-center flex-row">
                                        @include('frontend.partial.individual-image')
                                    </div>
                                @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal" action="{{ route('front.individual-calc-second', $calc_type) }}" novalidate method="post">
                                        @csrf
                                        <input type="hidden" name="calc_type" value="{{ $calc_type }}"/>
                                        <input type="hidden" name="cop" value="cop" />
                                        <div class="row">
                                            @if($calc_type != 'sd')
                                                @include('frontend.partial.common-partial')
                                            @else
                                                @include('frontend.partial.sd-pattern', ['pattern' => 'Width(size)', 'value' => 'top_pattern', 'class' => 'top_pattern_sd'])
                                            @endif
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6 my-5 d-flex justify-content-center align-items-center btn-mobile">
                                                @if($calc_type === 'c3') 
                                                    <a href="{{ route('front.sub-calc', $calc_type = 'c' ) }}" class="btn btn-outline-warning mx-2"
                                                        style="border-radius:50%;line-height:3em;"><i class="fas fa-arrow-left"></i></a>
                                                @elseif($calc_type === 'c2') 
                                                    <a href="{{route('front.sub-calc', $calc_type = 'c')}}" class="btn btn-outline-warning mx-2"
                                                        style="border-radius:50%;line-height:3em;"><i class="fas fa-arrow-left"></i></a>
                                                @elseif($calc_type ==='c1')
                                                    <a href="{{ route('front.sub-calc', $calc_type = 'c') }}" class="btn btn-outline-warning mx-2"
                                                        style="border-radius:50%;line-height:3em;"><i class="fas fa-arrow-left"></i></a>
                                                @elseif($calc_type === 'sw2')
                                                    <a href="{{ route('front.sub-calc', $calc_type = 'sl') }}" class="btn btn-outline-warning mx-2"
                                                        style="border-radius:50%;line-height:3em;"><i class="fas fa-arrow-left"></i></a>
                                                @elseif($calc_type === 'sw3')
                                                    <a href="{{ route('front.sub-calc', $calc_type = 'sl') }}" class="btn btn-outline-warning mx-2"
                                                        style="border-radius:50%;line-height:3em;"><i class="fas fa-arrow-left"></i></a>
                                                @else
                                                    <a href="{{ route('front.main-calc', $initialize = 0) }}" class="btn btn-outline-warning mx-2"
                                                        style="border-radius:50%;line-height:3em;"><i class="fas fa-arrow-left"></i></a>
                                                @endif
                                                <form action="{{ route('front.individual-calc-second', $calc_type) }}" method="post">
                                                @csrf
                                                    <button type="submit" class="btn btn-outline-warning" style="line-height:3em;border-radius:50%;">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
