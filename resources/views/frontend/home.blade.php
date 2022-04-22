@extends('layouts.frontend-master')
@section('title', 'Home')
@section('page-style')

@endsection
@section('content')
    <div class="container-fluid">

    <!-- ******************* Page Title ******************** -->
            <div class="d-flex justify-content-center align-items-center flex-column">
                <h1 class="text-center text-uppercase font-weight-bold"
                    style="font-size:4rem;padding-bottom:1.5rem;border-bottom: 2px solid #f77055;font-family:sans-serif;color:#445265;">join the team
                </h1>
                <h1 class="text-uppercase text-center" style="color:#f77055;font-weight:900;font-size: 3em;font-family:serif;">benefits include</h1>
                <h1 class="mt-2 text-uppercase text-center" style="color:#445265;font-weight:bold;font-size: 2em;font-family:sans-serif;">highest quality exclusive leads</h1>
                <h1 class="text-uppercase text-center" style="color:#445265;font-size: 2em;font-weight:bold;font-family:sans-serif;">full marketing strategy</h1>
                <h1 class="text-uppercase text-center" style="color:#445265;font-size: 2em;font-weight:bold;font-family:sans-serif;">business support tools</h1>
                <h1 class="text-uppercase text-center" style="color:#445265;font-size: 2em;font-weight:bold;font-family:sans-serif;">save massive amounts of time</h1>
                <h1 class="text-uppercase text-center" style="color:#445265;font-size: 2em;font-weight:bold;font-family:sans-serif;">save on salesman and sales team management</h1>
                <h1 class="text-uppercase text-center" style="color:#445265;font-size: 2em;font-weight:bold;font-family:sans-serif;">and more!</h1>
            </div>
            <div class="my-3 d-flex justify-content-start" style="position: absolute;left:0;background-color:#f77055;width:100vw;height: 2rem;">
            </div>
            <div class="container">
                <form style="margin-top:10rem;">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label class="text-uppercase" style="font-size: 1.5em;font-family:oswald;color:#445265;">Company name *</label>
                                        <input type="text" class="form-control" style="background-color:white;font-size:1.5em;border: 2px solid #f77055"  data-validation-required-message="This field is required" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label class="text-uppercase" style="font-size: 1.5em;font-family:oswald;color:#445265">Contact name *</label>
                                        <input type="text" class="form-control" style="font-size:1.5em;border: 2px solid #f77055" data-validation-required-message="This field is required" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label class="text-uppercase" style="font-size: 1.5em;font-family:oswald;color:#445265;">company address *</label>
                                        <input type="text" class="form-control" style="background-color:white;font-size:1.5em;border: 2px solid #f77055" data-validation-required-message="This field is required" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label class="text-uppercase" style="font-size: 1.5em;font-family:oswald;color:#445265">contact email *</label>
                                        <input type="email" class="form-control" style="background-color:white;font-size:1.5em;border: 2px solid #f77055" data-validation-required-message="This field is required" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label class="text-uppercase" style="font-size: 1.5em;font-family:oswald;color:#445265">City *</label>
                                        <input type="text" class="form-control" placeholder="City" style="background-color:white;font-size:1.5em;border: 2px solid #f77055" data-validation-required-message="This field is required" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label class="text-uppercase" style="font-size: 1.5em;font-family:oswald;color:#445265">State *</label>
                                        <input type="text" class="form-control" placeholder="Region / State / Province"  style="background-color:white;font-size:1.5em;border: 2px solid #f77055" data-validation-required-message="This field is required" />
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label class="text-uppercase" style="font-size: 1.5em;font-family:oswald;color:#445265">Postal / Zip code *</label>
                                        <input type="text" class="form-control" placeholder="Postal / Zip code" style="background-color:white;color:black;font-size:1.5em;border: 2px solid #f77055" data-validation-required-message="This field is required" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label class="text-uppercase" style="font-size: 1.5em;font-family:oswald;color:#445265">State *</label>
                                        <input type="text" class="form-control" placeholder="Region / State / Province"  style="background-color:white;font-size:1.5em;border: 2px solid #f77055" data-validation-required-message="This field is required" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center my-3">
                            <div class="d-flex justify-content-center align-items-center" style="border:1px solid tomato;width: 170px;height:170px;border-radius:50%;">
                                <a href="{{ route('register') }}">
                                    <div class="d-flex justify-content-center align-items-center" style="background-color:tomato;width: 7em;height:7em;border-radius:50%;">
                                        <i class="fa fa-greater-than" style="color:white;font-size: 3rem"></i>
                                    </div>
                                </a>
                                {{-- <button type="submit" class="checkout" style="width:15em;border:1px solid #445265;height:3em;font-size:1.5em;font-weight:bold;">SUBMIT</button> --}}
                            </div>
                        </div>
                    </form>
            </div>

    </div>
@endsection
@section('page-script')

@endsection
