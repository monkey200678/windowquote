@extends('layouts.frontend-master')
@section('title', 'Individual Calculator')
@section('page-style')

@endsection
@section('content')
    <div class="container">
        <div class="card p-5">
                <div class="row">
                    <div class="col-md-3">
                        <a href="{{ route('front.main-calc', $initialize=1) }}">
                            <button class="p-1 alternate-font" style="text-transform:uppercase;background-color:tomato;font-size:15px;color:rgba(68,82,101,1);font-weight:bold;">add next window</button>
                        </a>
                        <hr style="background-color:orange;">
                    </div>
                    <div class="col-md-9"></div>
                </div>
                <form action="{{ route('front.get-quotes') }}" method="post">
                    @csrf
                    @foreach($results as $result)
                    <div class="my-3">
                        <div class="row">
                                    <div class="col-md-2 d-flex justify-content-center align-items-center alternate-font" style="font-size: 1.5em;text-transform:uppercase;color:tomato;font-weight:bold;border:none;">qty:&nbsp;&nbsp;
                                        <input type="number" id="trader" name="qty[{{ $result->id }}]" style="width:50px;border: 1px solid lightblue;text-align:center;" value="{{ $result->qty }}" />
                                        <input type="hidden" name="id[{{ $result->id }}]" value="{{ $result->id }}" />
                                    </div>
                                    <div class="col-md-5 d-flex justify-content-center align-items-center">
                                        <div class="grid-container">
                                                <div class="grid-item1">
                                                    <figure class="d-flex flex-column justify-content-center align-items-center">
                                                    @if($result->win_type === 'DHB_2O0')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;"  src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHB_2O0.png') }}" />
                                                    @elseif($result->win_type === 'DHB_2O2')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHB_2O2.png') }}" />
                                                    @elseif($result->win_type === 'DHB_4O0')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" style="width:80%;"src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHB_4O0.png') }}" />
                                                    @elseif($result->win_type === 'DHB_4O4')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHB_4O4.png') }}" />
                                                    @elseif($result->win_type === 'DHB_6O0')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHB_6O0.png') }}" />
                                                    @elseif($result->win_type === 'DHB_6O6')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHB_6O6.png') }}" />
                                                    @elseif($result->win_type === 'DHB_8O0')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHB_8O0.png') }}" />
                                                    @elseif($result->win_type === 'DHB_8O8')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHB_8O8.png') }}" />
                                                    @elseif($result->win_type === 'DHW_2O0')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHW_2O0.png') }}" />
                                                    @elseif($result->win_type === 'DHW_2O2')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHW_2O2.png') }}" />
                                                    @elseif($result->win_type === 'DHW_4O0')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHW_4O0.png') }}" />
                                                    @elseif($result->win_type === 'DHW_4O4')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHW_4O4.png') }}" />
                                                    @elseif($result->win_type === 'DHW_6O0')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHW_6O0.png') }}" />
                                                    @elseif($result->win_type === 'DHW_6O6')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHW_6O6.png') }}" />
                                                    @elseif($result->win_type === 'DHW_8O0')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHW_8O0.png') }}" />
                                                    @elseif($result->win_type === 'DHW_8O8')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHW_8O8.png') }}" />
                                                    @elseif($result->win_type === 'DHT_2O0')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHT_2O0.png') }}" />
                                                    @elseif($result->win_type === 'DHT_2O2')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHT_2O2.png') }}" />
                                                    @elseif($result->win_type === 'DHT_4O0')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHT_4O0.png') }}" />
                                                    @elseif($result->win_type === 'DHT_4O4')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHT_4O4.png') }}" />
                                                    @elseif($result->win_type === 'DHT_6O0')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHT_6O0.png') }}" />
                                                    @elseif($result->win_type === 'DHT_6O6')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHT_6O6.png') }}" />
                                                    @elseif($result->win_type === 'DHT_8O0')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHT_8O0.png') }}" />
                                                    @elseif($result->win_type === 'DHT_8O8')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHT_8O8.png') }}" />
                                                    @elseif($result->win_type === 'AWING_B')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato">awing window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/AWING/AWING_B.png') }}" />
                                                    @elseif($result->win_type === 'AWING_B_G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato">awing window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/AWING/AWING_B_G.png') }}" />
                                                    @elseif($result->win_type === 'AWING_T')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato">awing window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/AWING/AWING_T.png') }}" />
                                                    @elseif($result->win_type === 'AWING_T_G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato">awing window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/AWING/AWING_T_G.png') }}" />
                                                    @elseif($result->win_type === 'AWING_W')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato">awing window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/AWING/AWING_W.png') }}" />
                                                    @elseif($result->win_type === 'AWING_W_G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">awing window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/AWING/AWING_W_G.png') }}" />
                                                    @elseif($result->win_type === '1CAS_B')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato">casement window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_B.png') }}" />
                                                    @elseif($result->win_type === '1CAS_B_G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato">casement window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_B_G.png') }}" />
                                                    @elseif($result->win_type === '1CAS_T')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">casement window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_T.png') }}" />
                                                    @elseif($result->win_type === '1CAS_T_G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">casement window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_T_G.png') }}" />
                                                    @elseif($result->win_type === '1CAS_W')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">casement window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_W.png') }}" />
                                                    @elseif($result->win_type === '1CAS_W_G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">casement window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_W_G.png') }}" />
                                                    @elseif($result->win_type === '2CAS_B')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">casement window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_B.png') }}" />
                                                    @elseif($result->win_type === '2CAS_B_G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">casement window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_B_G.png') }}" />
                                                    @elseif($result->win_type === '2CAS_T')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">casement window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_T.png') }}" />
                                                    @elseif($result->win_type === '2CAS_T_G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">casement window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_T_G.png') }}" />
                                                    @elseif($result->win_type === '2CAS_W')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">casement window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_W.png') }}" />
                                                    @elseif($result->win_type === '2CAS_W_G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">casement window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_W_G.png') }}" />
                                                    @elseif($result->win_type === '3CAS_B')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">casement window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_B.png') }}" />
                                                    @elseif($result->win_type === '3CAS_B_G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">casement window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_B_G.png') }}" />
                                                    @elseif($result->win_type === '3CAS_T')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">casement window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_T.png') }}" />
                                                    @elseif($result->win_type === '3CAS_T_G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">casement window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_T_G.png') }}" />
                                                    @elseif($result->win_type === '3CAS_W')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">casement window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_W.png') }}" />
                                                    @elseif($result->win_type === '3CAS_W_G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">casement window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_W_G.png') }}" />
                                                    @elseif($result->win_type === 'PATIO_DOOR_B')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">patio door</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_B.png') }}" />
                                                    @elseif($result->win_type === 'PATIO_DOOR_B_G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">patio door</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_B_G.png') }}" />
                                                    @elseif($result->win_type === 'PATIO_DOOR_T')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">patio door</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_T.png') }}" />
                                                    @elseif($result->win_type === 'PATIO_DOOR_T_G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">patio door</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_T_G.png') }}" />
                                                    @elseif($result->win_type === 'PATIO_DOOR_W')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">patio door</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_W.png') }}" />
                                                    @elseif($result->win_type === 'PATIO_DOOR_W_G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">patio door</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_W_G.png') }}" />
                                                    @elseif($result->win_type === 'PICTURE_B')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">picture window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_B.png') }}" />
                                                    @elseif($result->win_type === 'PICTURE_B_G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">picture window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_B_G.png') }}" />
                                                    @elseif($result->win_type === 'PICTURE_T')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">picture window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_T.png') }}" />
                                                    @elseif($result->win_type === 'PICTURE_T_G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">picture window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_T_G.png') }}" />
                                                    @elseif($result->win_type === 'PICTURE_W')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">picture window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_W.png') }}" />
                                                    @elseif($result->win_type === 'PICTURE_W_G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">picture window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_W_G.png') }}" />
                                                    @elseif($result->win_type === '3SLIDING_B')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">sliding window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_B.png') }}" />
                                                    @elseif($result->win_type === '3SLIDING_B_G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">sliding window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_B_G.png') }}" />
                                                    @elseif($result->win_type === '3SLIDING_T')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">sliding window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_T.png') }}" />
                                                    @elseif($result->win_type === '3SLIDING_T_G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">sliding window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_T_G.png') }}" />
                                                    @elseif($result->win_type === '3SLIDING_W')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">sliding window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_W.png') }}" />
                                                    @elseif($result->win_type === '3SLIDING_W_G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">sliding window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_W_G.png') }}" />
                                                    @elseif($result->win_type === 'SLIDING_B')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">sliding window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_B.png') }}" />
                                                    @elseif($result->win_type === 'SLIDING_B_G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">sliding window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_B_G.png') }}" />
                                                    @elseif($result->win_type === 'SLIDING_T')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">sliding window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_T.png') }}" />
                                                    @elseif($result->win_type === 'SLIDING_T_G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">sliding window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_T_G.png') }}" />
                                                    @elseif($result->win_type === 'SLIDING_W')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">sliding window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_W.png') }}" />
                                                    @elseif($result->win_type === 'SLIDING_W_G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">sliding window</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_W_G.png') }}" />
                                                    @elseif($result->win_type === 'DHB')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHB.png') }}" />
                                                    @elseif($result->win_type === 'DHW')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHW.png') }}" />
                                                    @elseif($result->win_type === 'DHT')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">double hung</figcaption class="alternate-font">
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHT.png') }}" />
                                                    @elseif($result->win_type ==='PDW5')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">patio door</figcaption class="alternate-font">
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW5.png') }}">
                                                    @elseif($result->win_type ==='PDW5G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">patio door</figcaption class="alternate-font">
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW5G.png') }}">
                                                    @elseif($result->win_type ==='PDB5G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">patio door</figcaption class="alternate-font">
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDB5G.png') }}">
                                                    @elseif($result->win_type ==='PDT5G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">patio door</figcaption class="alternate-font">
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDT5G.png') }}">
                                                    @elseif($result->win_type ==='PDT5')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">patio door</figcaption class="alternate-font">
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDT5.png') }}">
                                                    @elseif($result->win_type ==='PDB5')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">patio door</figcaption class="alternate-font">
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDB5.png') }}">
                                                    @elseif($result->win_type ==='PDW6')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">patio door</figcaption class="alternate-font">
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW6.png') }}">
                                                    @elseif($result->win_type ==='PDW6G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">patio door</figcaption class="alternate-font">
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW6G.png') }}">
                                                    @elseif($result->win_type ==='PDB6G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">patio door</figcaption class="alternate-font">
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDB6G.png') }}">
                                                    @elseif($result->win_type ==='PDT6G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">patio door</figcaption class="alternate-font">
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDT6G.png') }}">
                                                    @elseif($result->win_type ==='PDT6')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">patio door</figcaption class="alternate-font">
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDT6.png') }}">
                                                    @elseif($result->win_type ==='PDB6')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">patio door</figcaption class="alternate-font">
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDB6.png') }}">
                                                    @elseif($result->win_type ==='PDW8')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">patio door</figcaption class="alternate-font">
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW8.png') }}">
                                                    @elseif($result->win_type ==='PDW8G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">patio door</figcaption class="alternate-font">
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW8G.png') }}">
                                                    @elseif($result->win_type ==='PDB8G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">patio door</figcaption class="alternate-font">
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDB8G.png') }}">
                                                    @elseif($result->win_type ==='PDT8G')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">patio door</figcaption class="alternate-font">
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDT8G.png') }}">
                                                    @elseif($result->win_type ==='PDT8')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">patio door</figcaption class="alternate-font">
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDT8.png') }}">
                                                    @elseif($result->win_type ==='PDB8')
                                                        <figcaption class="alternate-font" style="text-transform:uppercase;color:tomato;">patio door</figcaption class="alternate-font">
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDB8.png') }}">
                                                    @endif
                                                    </figure>
                                                </div>
                                                <div class="grid-item2" style="font-size: 15px;">{{ $result->height }}"</div>
                                                <div class="grid-item3" style="font-size: 15px;">{{ $result->width }}"</div>
                                            </div>
                                    </div>
                                    <div class="col-md-5 d-flex justify-content-start align-items-center">
                                        <ul style="list-style:none;text-transform:uppercase;font-size: 1.25em;">
                                            <li>
                                                extrior color:&nbsp;<span style="color:tomato;">{{ $result->exterior_color }}</span>
                                            </li>
                                            <li>
                                                interior color:&nbsp;<span style="color:tomato;">{{ $result->interior_color }}</span>
                                            </li>
                                            <li>glass;&nbsp;<span style="color:tomato;">{{ $result->glass }}</span></li>
                                            <li>foam filled frame:&nbsp;<span style="color:tomato">{{ $result->foam_field }}</span></li>
                                            <li>warranty:&nbsp;<span style="color:tomato">{{ $result->warranty }}</span></li>
                                            <li>install:&nbsp;<span style="color:tomato;">{{ $result->standard }}</span></li>
                                        </ul>
                                    </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="row my-5">
                        <div class="col-md-2"></div>
                        <div class="col-md-5 d-flex flex-column justify-content-center align-items-center">
                            <div><p style="text-transform:uppercase;font-weight:bold;color:#445265;">get quote</p></div>
                            <div>
                                <button type="submit" class="btn btn-outline-warning" style="line-height:3em;border-radius:50%;">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-5"></div>
                    </div>
                </form>
        </div>
    </div>
@endsection
@section('page-script')
@endsection
