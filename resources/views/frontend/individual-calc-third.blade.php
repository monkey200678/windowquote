@extends('layouts.frontend-master')
@section('title', 'Individual Calculator')
@section('page-style')

@endsection
@section('content')
    <div class="container">
        <div class="card p-5">
            <div class="row align-items-center justify-content-center">
                <h1 class="text-uppercase home-heading" style="border-bottom:2px solid orange;">select pattern</h1>
            </div>
            <div class="row my-4">
                @include('frontend.partial.grid-collection')
            </div>
            <div class="row d-flex justify-content-around">
                <a href="{{ route('front.individual-calc-second', 'dh') }}" class="btn btn-outline-warning"
                    style="border-radius:50%;line-height:3em;"><i class="fas fa-arrow-left"></i></a>
                <form action="{{ route('front.individual-calc-fourth') }}" method="post">
                    @csrf
                    <input type="hidden">
                    <input type="hidden">
                    <button type="submit" class="btn btn-outline-warning" style="line-height:3em;border-radius:50%;">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
@endsection
