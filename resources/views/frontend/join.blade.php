@extends('layouts.frontend-master')
@section('title', 'Individual Calculator')
@section('page-style')

@endsection
@section('content')
    <div class="container">
        <div class="card p-5">

    <!-- ******************* Page Title ******************** -->
            <div class="d-flex justify-content-center align-items-center flex-column">
                <h1 class="home-heading text-center text-uppercase font-weight-bold"
                    style="border-bottom: 3px solid #f77055;font-family:sans-serif;color:#445265;">join the team
                </h1>
                <h1 class="mt-1 text-uppercase text-center" style="color:#f77055;font-weight:200;font-size: 3em;font-family:sans-serif;">benefits include</h1>
                <h1 class="mt-2 text-uppercase text-center" style="color:#445265;font-weight:bold;font-size: 2em;font-family:sans-serif;">highest quality exclusive leads</h1>
                <h1 class="text-uppercase text-center" style="color:#445265;font-size: 2em;font-weight:bold;font-family:sans-serif;">full marketing strategy</h1>
                <h1 class="text-uppercase text-center" style="color:#445265;font-size: 2em;font-weight:bold;font-family:sans-serif;">business support tools</h1>
                <h1 class="text-uppercase text-center" style="color:#445265;font-size: 2em;font-weight:bold;font-family:sans-serif;">save massive amounts of time</h1>
                <h1 class="text-uppercase text-center" style="color:#445265;font-size: 2em;font-weight:bold;font-family:sans-serif;">save on salesman and sales team management</h1>
                <h1 class="text-uppercase text-center" style="color:#445265;font-size: 2em;font-weight:bold;font-family:sans-serif;">highest profit per job in class</h1>
                <div class="mt-3 d-flex justify-content-start">
                    <h3 class="text-uppercase text-center" style="font-family:sans-serif;">become a certified
                        <span style="color:#445265;font-family:oswald;font-weight:bold;">your</span>
                        <span style="color:#f77055;font-family:oswald;font-weight:bold;">window</span>
                        <span style="color:#445265;font-family:oswald;font-weight:bold;">quote.com</span>
                        installation<br>specialist
                    </h3>
                </div>
            </div>
            <form class="mt-5">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label style="font-size: 1.5em;font-family:oswald;">Company name *</label>
                                    <input type="text" class="form-control" style="background-color:lightcyan;font-size:1.5em;"  data-validation-required-message="This field is required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label style="font-size: 1.5em;font-family:oswald;">Contact name *</label>
                                    <input type="text" class="form-control" style="background-color:lightcyan;font-size:1.5em;" data-validation-required-message="This field is required" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label style="font-size: 1.5em;font-family:oswald;">Email *</label>
                                    <input type="email" class="form-control" style="background-color:lightcyan;font-size:1.5em;" data-validation-required-message="This field is required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label style="font-size: 1.5em;font-family:oswald;">Phone *</label>
                                    <input type="text" class="form-control" style="background-color:lightcyan;font-size:1.5em;" data-validation-required-message="This field is required" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label style="font-size: 1.5em;font-family:oswald;">Street Address *</label>
                                    <input type="text" class="form-control" placeholder="Street Address"  style="background-color:lightcyan;font-size:1.5em;" data-validation-required-message="This field is required" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label style="font-size: 1.5em;font-family:oswald;">City *</label>
                                    <input type="text" class="form-control" placeholder="City" style="background-color:lightcyan;font-size:1.5em;" data-validation-required-message="This field is required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label style="font-size: 1.5em;font-family:oswald;">State *</label>
                                    <input type="text" class="form-control" placeholder="Region / State / Province"  style="background-color:lightcyan;font-size:1.5em;" data-validation-required-message="This field is required" />
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label style="font-size: 1.5em;font-family:oswald;">Postal / Zip code *</label>
                                    <input type="text" class="form-control" placeholder="Postal / Zip code" style="background-color:lightcyan;color:black;font-size:1.5em;" data-validation-required-message="This field is required" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center my-3">
                        <button type="submit" class="checkout" style="width:15em;border:1px solid #445265;height:3em;font-size:1.5em;font-weight:bold;">SUBMIT</button>
                    </div>
                </form>
        </div>
    </div>
@endsection
@section('page-script')
@endsection
