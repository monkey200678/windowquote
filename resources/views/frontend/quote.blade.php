@extends('layouts.frontend-master')
@section('title', 'Individual Calculator')
@section('page-style')

@endsection
@section('content')
    <div class="container">
        <div class="card p-5">
            <div class="row">
                <div class="col-md-7">
                    <p style="font-size:30px;line-height:normal;">
                        <span style="font-size:32px;">
                            <span style="font-family: helvetica-w01-bold, helvetica-w02-bold, helvetica-lt-w10-bold, sans-serif">
                                <span style="font-family:oswald-medium,oswald,sans-serif;font-weight: bold; color: rgb(255,255,255);font-weight: bold">
                                    <span style="color: inherit;font-weight: inherit">
                                        <a href="{{ route('frontend.home') }}" target="_self" style="color: #445265;font-weight: bold;text-decoration:none">YOUR</a>
                                    </span>
                                    <span style="color: #f77055;background: transparent">
                                        <a href="{{ route('frontend.home') }}" target="_self" style="color: inherit;text-decoration:none">WINDOW</a>
                                    </span>
                                    <span style="color: rgb(255,255,255)">
                                        <a href="{{ route('frontend.home') }}" target="_self" style="color: #445265;text-decoration:none">QUOTE.COM</a>
                                    </span>
                                </span>
                            </span>
                        </span>
                    </p>
                </div>
                <div class="col-md-5 d-flex align-items-center">
                    <h3 style="text-transform:uppercase;"><span class="alternate-font" style="color:tomato;">quote number:<span style="color:#445265;">Q-{{ Session::get('state_abbr') }}-{{ $results[0]->quote_number }}</h3>
                </div>
            </div>
            @foreach($results as $result)
            <div class="my-3">
                <div class="row">
                            <div class="col-md-2 d-flex justify-content-center align-items-center alternate-font" style="font-size:1.5em;text-transform:uppercase;color:#445265;font-weight:bold;">
                                qty:&nbsp;&nbsp;<span style="color:tomato;">{{ $result->qty }}</span>
                            </div>
                            <div class="col-md-5 d-flex justify-content-center align-items-center">
                                <div class="grid-container">
                                        <div class="grid-item1">
                                                    <figure class="d-flex flex-column justify-content-center align-items-center alternate-font">
                                                    @if($result->win_type === 'DHB_2O0')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">double hung</figcaption>
                                                        <img style="width:100%;"  src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHB_2O0.png') }}" />
                                                    @elseif($result->win_type === 'DHB_2O2')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHB_2O2.png') }}" />
                                                    @elseif($result->win_type === 'DHB_4O0')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">double hung</figcaption>
                                                        <img style="width:100%;" style="width:80%;"src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHB_4O0.png') }}" />
                                                    @elseif($result->win_type === 'DHB_4O4')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHB_4O4.png') }}" />
                                                    @elseif($result->win_type === 'DHB_6O0')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHB_6O0.png') }}" />
                                                    @elseif($result->win_type === 'DHB_6O6')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHB_6O6.png') }}" />
                                                    @elseif($result->win_type === 'DHB_8O0')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHB_8O0.png') }}" />
                                                    @elseif($result->win_type === 'DHB_8O8')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHB_8O8.png') }}" />
                                                    @elseif($result->win_type === 'DHW_2O0')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHW_2O0.png') }}" />
                                                    @elseif($result->win_type === 'DHW_2O2')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHW_2O2.png') }}" />
                                                    @elseif($result->win_type === 'DHW_4O0')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHW_4O0.png') }}" />
                                                    @elseif($result->win_type === 'DHW_4O4')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHW_4O4.png') }}" />
                                                    @elseif($result->win_type === 'DHW_6O0')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHW_6O0.png') }}" />
                                                    @elseif($result->win_type === 'DHW_6O6')
                                                        <figcaption style="text-transform:uppercase;color:tomato">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHW_6O6.png') }}" />
                                                    @elseif($result->win_type === 'DHW_8O0')
                                                        <figcaption style="text-transform:uppercase;color:tomato">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHW_8O0.png') }}" />
                                                    @elseif($result->win_type === 'DHW_8O8')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHW_8O8.png') }}" />
                                                    @elseif($result->win_type === 'DHT_2O0')
                                                        <figcaption style="text-transform:uppercase;color:tomato">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHT_2O0.png') }}" />
                                                    @elseif($result->win_type === 'DHT_2O2')
                                                        <figcaption style="text-transform:uppercase;color:tomato">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHT_2O2.png') }}" />
                                                    @elseif($result->win_type === 'DHT_4O0')
                                                        <figcaption style="text-transform:uppercase;color:tomato">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHT_4O0.png') }}" />
                                                    @elseif($result->win_type === 'DHT_4O4')
                                                        <figcaption style="text-transform:uppercase;color:tomato">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHT_4O4.png') }}" />
                                                    @elseif($result->win_type === 'DHT_6O0')
                                                        <figcaption style="text-transform:uppercase;color:tomato">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHT_6O0.png') }}" />
                                                    @elseif($result->win_type === 'DHT_6O6')
                                                        <figcaption style="text-transform:uppercase;color:tomato">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHT_6O6.png') }}" />
                                                    @elseif($result->win_type === 'DHT_8O0')
                                                        <figcaption style="text-transform:uppercase;color:tomato">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHT_8O0.png') }}" />
                                                    @elseif($result->win_type === 'DHT_8O8')
                                                        <figcaption style="text-transform:uppercase;color:tomato">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHT_8O8.png') }}" />
                                                    @elseif($result->win_type === 'AWING_B')
                                                        <figcaption style="text-transform:uppercase;color:tomato">awing window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/AWING/AWING_B.png') }}" />
                                                    @elseif($result->win_type === 'AWING_B_G')
                                                        <figcaption style="text-transform:uppercase;color:tomato">awing window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/AWING/AWING_B_G.png') }}" />
                                                    @elseif($result->win_type === 'AWING_T')
                                                        <figcaption style="text-transform:uppercase;color:tomato">awing window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/AWING/AWING_T.png') }}" />
                                                    @elseif($result->win_type === 'AWING_T_G')
                                                        <figcaption style="text-transform:uppercase;color:tomato">awing window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/AWING/AWING_T_G.png') }}" />
                                                    @elseif($result->win_type === 'AWING_W')
                                                        <figcaption style="text-transform:uppercase;color:tomato">awing window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/AWING/AWING_W.png') }}" />
                                                    @elseif($result->win_type === 'AWING_W_G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">awing window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/AWING/AWING_W_G.png') }}" />
                                                    @elseif($result->win_type === '1CAS_B')
                                                        <figcaption style="text-transform:uppercase;color:tomato">casement window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_B.png') }}" />
                                                    @elseif($result->win_type === '1CAS_B_G')
                                                        <figcaption style="text-transform:uppercase;color:tomato">casement window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_B_G.png') }}" />
                                                    @elseif($result->win_type === '1CAS_T')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">casement window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_T.png') }}" />
                                                    @elseif($result->win_type === '1CAS_T_G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">casement window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_T_G.png') }}" />
                                                    @elseif($result->win_type === '1CAS_W')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">casement window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_W.png') }}" />
                                                    @elseif($result->win_type === '1CAS_W_G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">casement window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_W_G.png') }}" />
                                                    @elseif($result->win_type === '2CAS_B')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">casement window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_B.png') }}" />
                                                    @elseif($result->win_type === '2CAS_B_G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">casement window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_B_G.png') }}" />
                                                    @elseif($result->win_type === '2CAS_T')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">casement window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_T.png') }}" />
                                                    @elseif($result->win_type === '2CAS_T_G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">casement window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_T_G.png') }}" />
                                                    @elseif($result->win_type === '2CAS_W')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">casement window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_W.png') }}" />
                                                    @elseif($result->win_type === '2CAS_W_G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">casement window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_W_G.png') }}" />
                                                    @elseif($result->win_type === '3CAS_B')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">casement window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_B.png') }}" />
                                                    @elseif($result->win_type === '3CAS_B_G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">casement window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_B_G.png') }}" />
                                                    @elseif($result->win_type === '3CAS_T')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">casement window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_T.png') }}" />
                                                    @elseif($result->win_type === '3CAS_T_G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">casement window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_T_G.png') }}" />
                                                    @elseif($result->win_type === '3CAS_W')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">casement window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_W.png') }}" />
                                                    @elseif($result->win_type === '3CAS_W_G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">casement window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_W_G.png') }}" />
                                                    @elseif($result->win_type === 'PATIO_DOOR_B')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">patio door</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_B.png') }}" />
                                                    @elseif($result->win_type === 'PATIO_DOOR_B_G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">patio door</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_B_G.png') }}" />
                                                    @elseif($result->win_type === 'PATIO_DOOR_T')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">patio door</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_T.png') }}" />
                                                    @elseif($result->win_type === 'PATIO_DOOR_T_G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">patio door</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_T_G.png') }}" />
                                                    @elseif($result->win_type === 'PATIO_DOOR_W')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">patio door</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_W.png') }}" />
                                                    @elseif($result->win_type === 'PATIO_DOOR_W_G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">patio door</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_W_G.png') }}" />
                                                    @elseif($result->win_type === 'PICTURE_B')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">picture window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_B.png') }}" />
                                                    @elseif($result->win_type === 'PICTURE_B_G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">picture window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_B_G.png') }}" />
                                                    @elseif($result->win_type === 'PICTURE_T')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">picture window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_T.png') }}" />
                                                    @elseif($result->win_type === 'PICTURE_T_G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">picture window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_T_G.png') }}" />
                                                    @elseif($result->win_type === 'PICTURE_W')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">picture window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_W.png') }}" />
                                                    @elseif($result->win_type === 'PICTURE_W_G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">picture window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_W_G.png') }}" />
                                                    @elseif($result->win_type === '3SLIDING_B')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">sliding window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_B.png') }}" />
                                                    @elseif($result->win_type === '3SLIDING_B_G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">sliding window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_B_G.png') }}" />
                                                    @elseif($result->win_type === '3SLIDING_T')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">sliding window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_T.png') }}" />
                                                    @elseif($result->win_type === '3SLIDING_T_G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">sliding window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_T_G.png') }}" />
                                                    @elseif($result->win_type === '3SLIDING_W')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">sliding window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_W.png') }}" />
                                                    @elseif($result->win_type === '3SLIDING_W_G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">sliding window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_W_G.png') }}" />
                                                    @elseif($result->win_type === 'SLIDING_B')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">sliding window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_B.png') }}" />
                                                    @elseif($result->win_type === 'SLIDING_B_G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">sliding window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_B_G.png') }}" />
                                                    @elseif($result->win_type === 'SLIDING_T')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">sliding window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_T.png') }}" />
                                                    @elseif($result->win_type === 'SLIDING_T_G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">sliding window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_T_G.png') }}" />
                                                    @elseif($result->win_type === 'SLIDING_W')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">sliding window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_W.png') }}" />
                                                    @elseif($result->win_type === 'SLIDING_W_G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">sliding window</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_W_G.png') }}" />
                                                    @elseif($result->win_type === 'DHB')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHB.png') }}" />
                                                    @elseif($result->win_type === 'DHW')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHW.png') }}" />
                                                    @elseif($result->win_type === 'DHT')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">double hung</figcaption>
                                                        <img style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHT.png') }}" />
                                                    @elseif($result->win_type ==='PDW5')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">patio door</figcaption>
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW5.png') }}">
                                                    @elseif($result->win_type ==='PDW5G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">patio door</figcaption>
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW5G.png') }}">
                                                    @elseif($result->win_type ==='PDB5G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">patio door</figcaption>
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDB5G.png') }}">
                                                    @elseif($result->win_type ==='PDT5G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">patio door</figcaption>
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDT5G.png') }}">
                                                    @elseif($result->win_type ==='PDT5')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">patio door</figcaption>
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDT5.png') }}">
                                                    @elseif($result->win_type ==='PDB5')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">patio door</figcaption>
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDB5.png') }}">
                                                    @elseif($result->win_type ==='PDW6')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">patio door</figcaption>
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW6.png') }}">
                                                    @elseif($result->win_type ==='PDW6G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">patio door</figcaption>
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW6G.png') }}">
                                                    @elseif($result->win_type ==='PDB6G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">patio door</figcaption>
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDB6G.png') }}">
                                                    @elseif($result->win_type ==='PDT6G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">patio door</figcaption>
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDT6G.png') }}">
                                                    @elseif($result->win_type ==='PDT6')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">patio door</figcaption>
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDT6.png') }}">
                                                    @elseif($result->win_type ==='PDB6')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">patio door</figcaption>
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDB6.png') }}">
                                                    @elseif($result->win_type ==='PDW8')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">patio door</figcaption>
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW8.png') }}">
                                                    @elseif($result->win_type ==='PDW8G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">patio door</figcaption>
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW8G.png') }}">
                                                    @elseif($result->win_type ==='PDB8G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">patio door</figcaption>
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDB8G.png') }}">
                                                    @elseif($result->win_type ==='PDT8G')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">patio door</figcaption>
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDT8G.png') }}">
                                                    @elseif($result->win_type ==='PDT8')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">patio door</figcaption>
                                                        <img style="width:100%" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDT8.png') }}">
                                                    @elseif($result->win_type ==='PDB8')
                                                        <figcaption style="text-transform:uppercase;color:tomato;">patio door</figcaption>
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
                                    <li class="alternate-font">
                                        extrior color:&nbsp;<span style="color:tomato;">{{ $result->exterior_color }}</span>
                                    </li>
                                    <li class="alternate-font">
                                        interior color:&nbsp;<span style="color:tomato;">{{ $result->interior_color }}</span>
                                    </li>
                                    <li class="alternate-font">glass;&nbsp;<span style="color:tomato;">{{ $result->glass }}</span></li>
                                    <li class="alternate-font">foam filled frame:&nbsp;<span style="color:tomato">{{ $result->foam_field }}</span></li>
                                    <li class="alternate-font">warranty:&nbsp;<span style="color:tomato">{{ $result->warranty }}</span></li>
                                    <li class="alternate-font">install:&nbsp;<span style="color:tomato;">{{ $result->standard }}</span></li>
                                </ul>
                            </div>
                </div>
            </div>
            @endforeach

            <div class="row">
                <div class="col-md-12 d-flex justify-content-end" style="border-bottom:2px solid tomato;">
                    <h1 class="alternate-font" style="text-transform:uppercase;color:#445265;">quote includes</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mt-1" style="color:tomato;font-size: 2rem;">${{ Session::get('total_price') }}</div>
                <div class="col-md-4 mt-1">
                    <a href="{{ route('front.join') }}">
                        <button class="p-1 checkout" style="width:16rem;height:5rem;text-transform:uppercase;font-size:15px;font-weight:bold;">buy windows</button>
                    </a>
                </div>
                <div class="col-md-5 mt-2 d-flex flex-column">
                    <h5 class="alternate-font" style="text-transform:uppercase;">custom measure</h5>
                    <h5 class="alternate-font" style="text-transform:uppercase;">installation of new windows</h5>
                    <h5 class="alternate-font" style="text-transform:uppercase;">deposal of old windows</h5>
                    <h5 class="alternate-font" style="text-transform:uppercase;">clean up</h5>
                    <h5 class="alternate-font" style="text-transform:uppercase;">warranty registration packet</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
@endsection
