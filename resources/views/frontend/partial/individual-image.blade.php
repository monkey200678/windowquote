@if($calc_type == 'dh')
    <p style="margin-bottom: 5px;" class="d-flex align-items-center justify-content-center" style="position:relative;">
        <img id="sample-window" style="width:100%;" src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHW.png') }}">
    </p>
@elseif($calc_type == 'patio1')
    <div class="no d-flex align-items-center justify-content-center" style="position:relative;">
        <img style="width:100%;" id="sample-window" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW5.png') }}" alt="sl2"/>
    </div>
@elseif($calc_type == 'patio2')
    <div class="no d-flex align-items-center justify-content-center" style="position:relative;">
        <img style="width:100%;" id="sample-window" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW6.png') }}" alt="sl2"/>
    </div>
@elseif($calc_type == 'patio3')
    <div class="no d-flex align-items-center justify-content-center" style="position:relative;">
        <img style="width:100%;" id="sample-window" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW8.png') }}" alt="sl2"/>
    </div>
@elseif($calc_type == 'sw2')
    <div class="no d-flex align-items-center justify-content-center" style="position:relative;">
        <img style="width:100%;" id="sample-window" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_W.png') }}" alt="sl2"/>
    </div>

@elseif($calc_type == 'sw3')
    <div class="no d-flex align-items-center justify-content-center" style="position:relative;">
        <img style="width: 100%;" id="sample-window" src="{{ asset('img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_W.png') }}" alt="sl3" />
    </div>

@elseif($calc_type == 'pw')
    <div class="no d-flex align-items-center justify-content-center" style="position:relative;">
        <img style="width:100%;" id="sample-window" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_W.png') }}" alt="picture window"/>
    </div>

@elseif($calc_type == 'c1')
    <div class="no d-flex justify-content-center align-items-center" style="position:relative;">
        <img style="width:100%;" id="sample-window" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_W.png') }}" />
    </div>

@elseif($calc_type == 'c2')
    <div class="no d-flex justify-content-center align-items-center" style="position:relative;">
        <img style="width:100%;" id="sample-window" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_W.png') }}" />
    </div>

@elseif($calc_type == 'c3')
    <div class="no d-flex justify-content-center align-items-center" style="position:relative;">
        <img style="width:100%;" id="sample-window" src="{{ asset('img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_W.png') }}" />
    </div>

@elseif($calc_type == 'aw')
    <div class="no d-flex justify-content-center align-items-center" style="position:relative;">
        <img style="width:100%;" id="sample-window" src="{{ asset('img/WINDOW_QUOTE_PICTURES/AWING/AWING_W.png') }}" alt="awing window" />
    </div>

@elseif($calc_type == 'gw')
    <div class="no d-flex justify-content-center align-items-center" style="position:relative;">
        <img style="width:100%;" id="sample-window" src="{{ asset('img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_W.png') }}" alt="garden window" />
    </div>

@elseif($calc_type == 'badh')
    <img src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHW.png') }}" style="width:30%;"  />
    <img src="{{ asset('img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_W.png') }}" style="width:30%;" />
    <img src="{{ asset('img/WINDOW_QUOTE_PICTURES/DH/DHW.png') }}" style="width:30%;" />

@elseif($calc_type == 'bac')
    <img src="http://localhost/calc/img/sgl0.png" class="bac_side_no">
    <img src="http://localhost/calc/img/bac_side_yes.png" class="bac_side_yes">
    <img src="http://localhost/calc/img/dh0.png" class="bac_center_no" />
    <img src="http://localhost/calc/img/bac_yes.png" class="bac_center_yes" />
    <img src="http://localhost/calc/img/sgl0.png" class="bac_side_no">
    <img src="http://localhost/calc/img/bac_side_yes.png" class="bac_side_yes">

@elseif($calc_type == 'bo3')
    <div class="d-flex justify-content-center align-items-center">
        <img src="{{ asset('img/WINDOW_QUOTE_PICTURES/BOW/bow_w3.png') }}" style="width: 100%;"/>
    </div>

@elseif($calc_type == 'bo4')
    <div class="d-flex justify-content-center align-items-center">
        <img src="{{ asset('img/WINDOW_QUOTE_PICTURES/BOW/bow_w4.png') }}" style="width: 100%;"/>
    </div>

@elseif($calc_type == 'bo5')
    <div class="d-flex justify-content-center align-items-center">
        <img src="{{ asset('img/WINDOW_QUOTE_PICTURES/BOW/bow_straight.png') }}" style="width: 100%;" />
    </div>
    <div class="yes">
        <img src="{{ asset('img/bo5_yes.png') }}" />
    </div>

@elseif($calc_type == "bo6")
    <div class="no">
        <img src="{{ asset('img/dh0.png') }}" />
        <img src="{{ asset('img/dh0.png') }}" />
        <img src="{{ asset('img/dh0.png') }}" />
        <img src="{{ asset('img/dh0.png') }}" />
        <img src="{{ asset('img/dh0.png') }}" />
        <img src="{{ asset('img/dh0.png') }}" />
    </div>
    <div class="yes">
        <img src="{{ asset('img/bo6_yes.png') }}" />
    </div>

@elseif($calc_type == "sd")
    <div class="no">
        <img src="{{ asset('img/sgl0.png') }}" />
    </div>
    <div class="yes">
        <img src="{{ asset('img/sd_yes.png') }}" />
    </div>
@endif
