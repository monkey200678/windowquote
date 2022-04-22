@extends('layouts.frontend-master')
@section('title', 'Individual Calculator')
@section('page-style')

@endsection
@section('content')
    <div class="container">
        <div class="card p-5">
            <div class="row" style="border-bottom: 2px solid orange;">
                <div class="col-md-12" style="border-bottom: 2px solid orange;">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="alternate-font text-center text-uppercase" style="color:#445265">@include('frontend.partial.total-title-collection')</h1>
                        </div>
                        <div class="col-md-6">
                            <h1 class="text-center alternate-font text-uppercase" style="color:#445265;">efficiency</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div class="my-5">
                            <div class="grid-container">
                                <div class="grid-item1">
                                    @include('frontend.partial.total-collection')
                                </div>
                                <div class="grid-item2">{{ Session::get('height') }}"</div>
                                <div class="grid-item3">{{ Session::get('width') }}"</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 d-flex flex-column">
                    <h3 class="text-center my-3 alternate-font text-uppercase" style="color:tomato;">select</h3>
                    <div class="row">
                            <div class="col-5 d-flex justify-content-end align-items-center">
                                <h1 style="display:inline;font-family:oswald;color:#445265">
                                <span style="color:tomato;font-size:1em;font-family:oswald;font-weight:bold;">e</span>STAR 2: </h1>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                    <h1 class="double-indicator alternate-font" style="text-transform:uppercase;color:#445265">double pane</h1>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-5 d-flex justify-content-end align-items-center">
                                <h1 style="display:inline;font-family:oswald;color:#445265">
                                <span style="color:tomato;font-size:1em;font-family:oswald;font-weight:bold;">e</span>STAR 3: </h1>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <h1 class="tripple-indicator alternate-font text-uppercase" style="color:#445265">triple pane</h1>
                            </div>
                    </div>
                            
                    <div class="mt-3 row">
                        <div class="col-5 d-flex justify-content-end align-items-center">
                            <span class="alternate-font text-uppercase font-weight-bold" style="color:tomato;font-size: 16px;">insulated <br>frame</span>
                        </div>
                        <div class="col-7 d-flex align-items-center justify-content-start">
                            <ul class="d-flex mt-1" style="list-style:none;">
                                <li class="frame-indicator alternate-font" id="frame-indicator-yes" style="font-size:2em;color:#445265">YES</li>
                                <li class="mx-1 frame-indicator alternate-font" id="frame-indicator-no" style="font-size:2em;color:#445265">NO</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col-md-12 my-5 d-flex justify-content-center align-items-center btn-mobile">
                            @if($win_type =='DHB_8O8'||$win_type=='DHB_8O0' || $win_type == 'DHB_2O0' || $win_type =='DHB_4O4' || $win_type =='DHB_2O2' ||
                                $win_type =='DHB_4O0' || $win_type =='DHB_6O0' || $win_type =='DHB_6O6')
                                <a href="{{ route('front.individual-calc-third', 'DHB') }}" class="btn btn-outline-warning mx-2"
                                    style="border-radius:50%;line-height:3em;"><i class="fas fa-arrow-left"></i></a>
                            @elseif($win_type =='DHT_8O8'||$win_type=='DHB_8O0' || $win_type == 'DHT_2O0' || $win_type =='DHT_4O4' || $win_type =='DHT_2O2' ||
                                        $win_type =='DHT_4O0' || $win_type =='DHT_6O0' || $win_type =='DHT_6O6')
                                    <a href="{{ route('front.individual-calc-third', 'DHT') }}" class="btn btn-outline-warning mx-2"
                                    style="border-radius:50%;line-height:3em;"><i class="fas fa-arrow-left"></i></a>
                            @elseif($win_type =='DHW_8O8'||$win_type=='DHW_8O0' || $win_type == 'DHW_2O0' || $win_type =='DHW_4O4' || $win_type =='DHW_2O2' ||
                                        $win_type =='DHW_4O0' || $win_type =='DHW_6O0' || $win_type =='DHW_6O6')
                                    <a href="{{ route('front.individual-calc-third', 'DHW') }}" class="btn btn-outline-warning mx-2"
                                    style="border-radius:50%;line-height:3em;"><i class="fas fa-arrow-left"></i></a>
                            @elseif($win_type =='PICTURE_B_G' || $win_type =='PICTURE_W_G' || $win_type == 'PICTURE_T_G' || $win_type =='PICTURE_W'
                                    || $win_type =='PICTURE_B'||$win_type=='PICTURE_T')
                                    <a href="{{ route('front.individual-calc-second', 'pw') }}" class="btn btn-outline-warning mx-2"
                                    style="border-radius:50%;line-height:3em;"><i class="fas fa-arrow-left"></i></a>
                            @else
                                <a href="{{ url()->previous() }}" class="btn btn-outline-warning mx-2"
                                    style="border-radius:50%;line-height:3em;"><i class="fas fa-arrow-left"></i></a>
                            @endif
                            <form action="{{ route('front.individual-calc-fifth')}}" method="post">
                                @csrf
                                <input type="hidden" id="glass-demo" name="glass-demo">
                                <input type="hidden" id="foam-field" name="foam_field">
                                <input type="hidden" id="win_type" name="win_type" value="{{ $win_type }}">
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
