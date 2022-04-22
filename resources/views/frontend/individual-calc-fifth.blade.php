@extends('layouts.frontend-master')
@section('title', 'Individual Calculator')
@section('page-style')

@endsection
@section('content')
    <div class="container">
        <div class="card p-5">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="alternate-font home-heading text-uppercase" style="border-bottom: 2px solid orange;font-size:30px;color:#445265;">
                                installation & warranty</h1>
                </div>
                <div class="col-md-5 mt-3">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <h1 style="font-weight:bold;text-transform:uppercase;border-bottom: 2px solid tomato;font-size:40px;"></h1>
                        <div>
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
                <div class="col-md-7">
                    <div class="d-flex flex-column align-items-center">
                        
                        <div class="mt-1" style="width:100%;">
                            <h1 class="text-center alternate-font" style="color:tomato;text-transform:uppercase;">select</h1>
                            <div class="d-flex justify-content-center"><p class="alternate-font" style="text-transform:uppercase;color:tomato;font-weight:bold;font-size:1.5em;">installation options</p></div>
                            <p class="standard-indicator text-center alternate-font" style="text-transform:uppercase;font-size:2em;color:#445265">standard</p>
                            <p class="mt-2 exterior-indicator text-center alternate-font" style="text-transform:uppercase;font-size:2em;color:#445265">standard plus</p>
                        </div>
                        <div class="mt-2" style="width:100%;">
                            <div class="d-flex justify-content-center"><p class="alternate-font" style="text-transform:uppercase;color:tomato;font-weight:bold;font-size:1.5em;">warranty options</p></div>
                            <p class="warranty-indicator text-center alternate-font" style="text-transform:uppercase;font-size:2em;color:#445265">standard warranty</p>
                            <p class="mt-2 no-warranty text-center alternate-font" style="text-transform:uppercase;font-size:2em;color:#445265">don't care warranty</p>
                        </div>
                        <div class="mt-3 d-flex justify-content-center align-items-center">
                            <span class="alternate-font" style="font-size: 30px;color:tomato;font-weight:bold;">QTY:&nbsp</span>
                            <input type="number" id="demo" class="text-center" style="width:20%;padding:5px;font-size:20px;border:1px solid lightblue;" name="demo">
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col-md-12 my-5 d-flex justify-content-center align-items-center btn-mobile">
                            <a href="{{ url()->previous() }}" class="btn btn-outline-warning mx-2" style="border-radius:50%;line-height:3em;"><i class="fas fa-arrow-left"></i></a>
                            <form action="{{ route('front.individual-calc-final') }}" method="post">
                                @csrf
                                <input type="hidden" id="standard-install" name="standard-install">
                                <input type="hidden" id="standard-plus-exterior" name="standard-plus-exterior">
                                <input type="hidden" id="standard-warranty" name="standard-warranty">
                                <input type="hidden" id="no-warranty" name="no-warranty">
                                <input type="hidden" id="qty" name="qty">
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
