@extends('layouts.frontend-master')
@section('title', 'Home')
@section('page-style')

@endsection
@section('content')
    <div class="container">

    <!-- ******************* Page Title ******************** -->
            <div class="d-flex justify-content-center align-items-center flex-column">
                <h1 class="text-center text-uppercase font-weight-bold"
                    style="font-size:4rem;padding-bottom:1.5rem;border-bottom: 2px solid #f77055;font-family:sans-serif;color:#445265;">disclosure and documents
                </h1>
                <h1 class="mt-2 text-uppercase" style="color:#445265;font-size: 2em;font-family:sans-serif;">YEARS IN BUSNESS?</h1>
                <h1 class="text-uppercase text-center" style="color:#445265;font-size: 2em;font-family:sans-serif;">NUMBER OF EMPLOYEES?</h1>
                <h1 class="text-uppercase text-center" style="color:#445265;font-size: 2em;font-family:sans-serif;">DO YOU HAVE ANY FELONY CONVICTIONS?</h1>
                <h1 class="text-uppercase text-center" style="color:#445265;font-size: 2em;font-family:sans-serif;">HAVE YOU EVER FILED FOR BANKRUPTCY?</h1>
                <h1 class="text-uppercase text-center" style="color:#445265;font-size: 2em;font-family:sans-serif;">HAS YOUR COMPANY EVER BEEN SUED?</h1>
            </div>
            <div class="mt-3 d-flex justify-content-start" style="position:absolute;left:0;background-color:#f77055;width:100vw;height: 2rem;">
            </div>
            <div class="d-flex justify-content-center align-items-center" style="margin-top: 6rem;">
                <h1 class="text-uppercase text-center" style="font-size: 4rem;color:#445265;font-weight:700;font-family:system-ui">upload</h1>
            </div>
            <div class="d-flex justify-content-center align-items-center mt-3">
                <h1 class="text-uppercase mx-5 font-weight-bold" style="font-size: 2.5rem;color:#445265;border: 2px solid #f77055;padding:1rem">state licenses</h1>
                <h1 class="text-uppercase mx-4 font-weight-bold" style="font-size: 2.5rem;color:#445265;border: 2px solid #f77055;padding:1rem;">insurance policies</h1>
            </div>

            <div class="d-flex justify-content-center align-items-center mt-5">
                            <div class="d-flex justify-content-center align-items-center" style="border:1px solid tomato;width: 170px;height:170px;border-radius:50%;">
                                <a href="{{ route('front.disclosure') }}">
                                    <div class="d-flex justify-content-center align-items-center" style="background-color:tomato;width: 7em;height:7em;border-radius:50%;">
                                        <i class="fa fa-greater-than" style="color:white;font-size: 3rem"></i>
                                    </div>
                                </a>
                                {{-- <button type="submit" class="checkout" style="width:15em;border:1px solid #445265;height:3em;font-size:1.5em;font-weight:bold;">SUBMIT</button> --}}
                            </div>
                        </div>

    </div>
@endsection
@section('page-script')

@endsection
