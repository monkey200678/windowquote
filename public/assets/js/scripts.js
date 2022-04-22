function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});

$(document).ready(function () {
    $('.yes').addClass('d-none');
    //dh calculator
    $('.dh_top_0, .dh_top_2, .dh_top_4, .dh_top_6, .dh_top_8').addClass('d-none');
    $('.dh_bottom_0, .dh_bottom_2, .dh_bottom_4, .dh_bottom_6, .dh_bottom_8').addClass('d-none');

    //bach calculator
    $('.badh_top_2, .badh_top_3, .badh_top_6, .badh_top_8').addClass('d-none');
    $('.badh_center_yes').addClass('d-none');
    $('.badh_bottom_2, .badh_bottom_4, .badh_bottom_6, .badh_bottom_8').addClass('d-none');

    //bac calculator
    $('.bac_side_yes, .bac_center_yes').addClass('d-none');
    $('#target').addClass('selected');

    $('#w-w').on('click', () => {
        let elem = $('#sample-window');
        let brokker = $('#brokker').attr('value');
        let publisher = $('#publisher').attr('value');
        switch(brokker) {
            case 'dh':
                if(publisher === 'grid_on') {
                    elem.attr('src', "../img/WINDOW_QUOTE_PICTURES/DH/DHW_8O8.png");
                }
                else 
                {
                    elem.attr('src', "../img/WINDOW_QUOTE_PICTURES/DH/DHW.png");
                }
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', 'DHW');
                    $('#dispatcher').attr('value', 'DHW');
                }
                else {
                    elem.attr('class', 'DHW');
                    $('#dispatcher').attr('value', 'DHW');
                }
                break;
            case 'sw2':
                if(publisher === 'grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_W_G.png');
                }
                else
                {
                    elem.attr('src',"../img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_W.png");
                }
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', 'SLIDING_W');
                }
                else {
                    elem.attr('class', 'SLIDING_W');
                }
                break;
            case 'patio1':
                if(publisher === 'grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW5G.png');
                }
                else
                {
                    elem.attr('src',"../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW5.png");
                }
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', 'PDW5');
                }
                else {
                    elem.attr('class', 'PDW5');
                }
                break;
            case 'patio2':
                if(publisher === 'grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW6G.png');
                }
                else
                {
                    elem.attr('src',"../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW6.png");
                }
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', 'PDW6');
                }
                else {
                    elem.attr('class', 'PDW6');
                }
                break;
            case 'patio3':
                if(publisher === 'grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW8G.png');
                }
                else
                {
                    elem.attr('src',"../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW8.png");
                }
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', 'PDW8');
                }
                else {
                    elem.attr('class', 'PDW8');
                }
                break;
            case 'sw3':
                if(publisher ==='grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_W_G.png');
                }
                else
                {
                    elem.attr('src', "../img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_W.png");
                }
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', '3SLIDING_W');
                }
                else {
                    elem.attr('class', '3SLIDING_W');
                }
                break;
            case 'pw':
                if(publisher === 'grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_W_G.png');
                }
                else
                {
                    elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_W.png");
                }
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', 'PICTURE_W');
                }
                else {
                    elem.attr('class', 'PICTURE_W');
                }
                break;
            case 'c1':
                if(publisher === 'grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_W_G.png');
                }
                else
                {
                    elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_W.png");
                }
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', '1CAS_W');
                }
                else {
                    elem.attr('class', '1CAS_W');
                }
                break;
            case 'c2':
                if(publisher === 'grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_W_G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_W.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', '2CAS_W');
                }
                else {
                    elem.attr('class', '2CAS_W');
                }
                break;
            case 'c3':
                if(publisher === 'grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_W_G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_W.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', '3CAS_W');
                }
                else {
                    elem.attr('class', '3CAS_W');
                }
                break;
            case 'aw':
                if(publisher === 'grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/AWING/AWING_W_G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/AWING/AWING_W.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', 'AWING_W');
                }
                else {
                    elem.attr('class', 'AWING_W');
                }
                break;
            default:
                if(publisher === 'grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_W_G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_W.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', 'PATIO_DOOR_W');
                }
                else {
                    elem.attr('class', 'PATIO_DOOR_W');
                }
        }
        $('#b-w').css({'color':'black','font-weight':'normal'});
        $('#t-t').css({'color':'black','font-weight':'normal'});
        $('#w-w').css( {'color':'tomato','font-weight':'bold'} );
    });

    $('#b-w').on('click', () => {
        let elem = $('#sample-window');
        let brokker = $('#brokker').attr('value');
        let publisher = $('#publisher').attr('value');
        switch(brokker) {
            case 'dh':
                if(publisher ==='grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/DH/DHB_8O8.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/DH/DHB.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', 'DHB');
                    $('#dispatcher').attr('value', 'DHB');
                }
                else {
                    elem.attr('class', 'DHB');
                    $('#dispatcher').attr('value', 'DHB')
                }
                break;
            case 'sw2':
                if(publisher ==='grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_B_G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_B.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', 'SLIDING_B');
                }
                else {
                    elem.attr('class', 'SLIDING_B');
                }
                break;
            case 'patio1':
                if(publisher ==='grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDB5G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDB5.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', 'PDB5');
                }
                else {
                    elem.attr('class', 'PDB5');
                }
                break;
            case 'patio2':
                if(publisher ==='grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDB6G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDB6.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', 'PDB6');
                }
                else {
                    elem.attr('class', 'PDB6');
                }
                break;
            case 'patio3':
                if(publisher ==='grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDB8G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDB8.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', 'PDB8');
                }
                else {
                    elem.attr('class', 'PDB8');
                }
                break;
            case 'sw3':
                if(publisher ==='grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_B_G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_B.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', '3SLIDING_B');
                }
                else {
                    elem.attr('class', '3SLIDING_B');
                }
                break;
            case 'pw':
                if(publisher==='grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_B_G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_B.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', 'PICTURE_B');
                }
                else {
                    elem.attr('class', 'PICTURE_B');
                }
                break;
            case 'c1':
                if(publisher ==='grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_B_G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_B.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', '1CAS_B');
                }
                else {
                    elem.attr('class', '1CAS_B');
                }
                break;
            case 'c2':
                if(publisher ==='grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_B_G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_B.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', '2CAS_B');
                }
                else {
                    elem.attr('class', '2CAS_B');
                }
                break;
            case 'c3':
                if(publisher ==='grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_B_G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_B.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', '3CAS_B');
                }
                else {
                    elem.attr('class', '3CAS_B');
                }
                break;
            case 'aw':
                if(publisher ==='grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/AWING/AWING_B_G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/AWING/AWING_B.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', 'AWING_B');
                }
                else {
                    elem.attr('class', 'AWING_B');
                }
                break;
            default:
                if(publisher === 'grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_B_G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_B.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', 'PATIO_DOOR_B');
                }
                else {
                    elem.attr('class', 'PATIO_DOOR_B');
                }
        }
        $('#w-w').css({'color':'black','font-weight':'normal'});
        $('#t-t').css({'color':'black','font-weight':'normal'});
        $('#b-w').css( {'color':'tomato','font-weight':'bold'} );
    });

    $('#t-t').on('click', () => {
        let elem = $('#sample-window');
        let brokker = $('#brokker').attr('value');
        let publisher = $('#publisher').attr('value');
        switch(brokker) {
            case 'dh':
                if(publisher) {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/DH/DHT.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/DH/DHT.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', 'DHT');
                    $('#dispatcher').attr('value', 'DHT');
                }
                else {
                    elem.attr('class', 'DHT');
                    $('#dispatcher').attr('value', 'DHT');
                }
                break;
            case 'sw2':
                if(publisher==='grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_T_G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_T.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', 'SLIDING_T');
                }
                else {
                    elem.attr('class', 'SLIDING_T');
                }
                break;
            case 'patio1':
                if(publisher==='grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDT5G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDT5.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', 'PDT5');
                }
                else {
                    elem.attr('class', 'PDT5');
                }
                break;
            case 'patio3':
                if(publisher==='grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDT8G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDT8.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', 'PDT8');
                }
                else {
                    elem.attr('class', 'PDT8');
                }
                break;
            case 'patio2':
                if(publisher==='grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDT6G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDT6.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', 'PDT6');
                }
                else {
                    elem.attr('class', 'PDT6');
                }
                break;
            case 'sw3':
                if(publisher==='grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_T_G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_T.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', '3SLIDING_T');
                }
                else {
                    elem.attr('class', '3SLIDING_T');
                }
                break;
            case 'pw':
                if(publisher === 'grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_T_G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_T.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', 'PICTURE_T');
                }
                else {
                    elem.attr('class', 'PICTURE_T');
                }
                break;
            case 'c1':
                if(publisher ==='grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_T_G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_T.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', '1CAS_T');
                }
                else {
                    elem.attr('class', '1CAS_T');
                }
                break;
            case 'c2':
                if(publisher ==='grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_T_G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_T.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', '2CAS_T.png');
                }
                else {
                    elem.attr('class', '2CAS_T.png');
                }
                break;
            case 'c3':
                if(publisher==='grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_T_G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_T.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', '3CAS_T.png');
                }
                else {
                    elem.attr('class', '3CAS_T');
                }
                break;
            case 'aw':
                if(publisher==='grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/AWING/AWING_T_G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/AWING/AWING_T.png");}
                if(!document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', 'AWING_T');
                }
                else {
                    elem.attr('class', 'AWING_T');
                }
                break;
            default:
                if(publisher==='grid_on') {
                    elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_T_G.png');
                }
                else
                {elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_T.png");}
                if(document.getElementById('sample-window').hasAttribute('class')) {
                    elem.removeAttr('class');
                    elem.attr('class', 'PATIO_DOOR_T');
                }
                else {
                    elem.attr('class', 'PATIO_DOOR_T');
                }
        }
        $('#b-w').css({'color':'black','font-weight':'normal'});
        $('#w-w').css({'color':'black','font-weight':'normal'});
        $('#t-t').css( {'color':'tomato','font-weight':'bold'} );
    })

    $('#trigger').on('click', () => {
        $('#publisher').attr('value', 'grid_on');
        let window_type = $('#sample-window').attr('class');
        $('#no_trigger').css('color', 'black');
        $('#trigger').css({'color':'tomato', 'font-weight':'bold'});
        if(((window_type === 'DHB') || (window_type === 'DHW') || (window_type === 'DHT')) && (window_type !== 'undefined')) {
            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "/individual-calc-third/",
                data: {
                    _token : $('meta[name="csrf-token"]').attr('content'),
                    value: window_type
                },
                dataType: "text",
                success: function (resultData) {
                    $('body').html(resultData);
                }
            });
        }
        else {
            let elem = $('#sample-window');
            switch(window_type) {
                case 'SLIDING_W':
                    elem.attr('src',"../img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_W_G.png");
                    window_type = 'SLIDING_W_G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case '3SLIDING_W':
                    elem.attr('src', "../img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_W_G.png");
                    window_type = '3SLIDING_W_G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case 'PDW5':
                    elem.attr('src', "../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW5G.png");
                    window_type = 'PDW5G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case 'PDW6':
                    elem.attr('src', "../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW6G.png");
                    window_type = 'PDW6G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case 'PDW8':
                    elem.attr('src', "../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW8G.png");
                    window_type = 'PDW8G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case 'PDB5':
                    elem.attr('src', "../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDB5G.png");
                    window_type = 'PDB5G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case 'PDB6':
                    elem.attr('src', "../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDB6G.png");
                    window_type = 'PDB6G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case 'PDB8':
                    elem.attr('src', "../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDB8G.png");
                    window_type = 'PDB8G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case 'PDT5':
                    elem.attr('src', "../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDT5G.png");
                    window_type = 'PDT5G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case 'PDT6':
                    elem.attr('src', "../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDT6G.png");
                    window_type = 'PDT6G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case 'PDT8':
                    elem.attr('src', "../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDT8G.png");
                    window_type = 'PDT8G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case 'PICTURE_W':
                    elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_W_G.png");
                    window_type = 'PICTURE_W_G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case '1CAS_W':
                    elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_W_G.png");
                    window_type = '1CAS_W_G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case '2CAS_W':
                    elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_W_G.png");
                    window_type = '2CAS_W_G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case '3CAS_W':
                    elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_W_G.png");
                    window_type = '3CAS_W_G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case 'AWING_W':
                    elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/AWING/AWING_W_G.png");
                    window_type = 'AWING_W_G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case 'PATIO_DOOR_W':
                    elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_W_G.png");
                    window_type = 'PATIO_DOOR_W_G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case 'SLIDING_B':
                    elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_B_G.png");
                    window_type = 'SLIDING_B_G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case '3SLIDING_B':
                    elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_B_G.png");
                    window_type = '3SLIDING_B_G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case 'PICTURE_B':
                    elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_B_G.png");
                    window_type = 'PICTURE_B_G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case '1CAS_B':
                    elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_B_G.png");
                    window_type = '1CAS_B_G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case '2CAS_B':
                    elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_B_G.png");
                    window_type = '2CAS_B_G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case '3CAS_B':
                    elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_B_G.png");
                    window_type = '3CAS_B_G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case 'AWING_B':
                    elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/AWING/AWING_B_G.png");
                    window_type = 'AWING_B_G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case 'PATIO_DOOR_B':
                    elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_B_G.png");
                    window_type = 'PATIO_DOOR_B_G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case 'SLIDING_T':
                    elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_T_G.png");
                    window_type = 'SLIDING_T_G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case '3SLIDING_T':
                    elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_T_G.png");
                    window_type = '3SLIDING_T_G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case 'PICTURE_T':
                    elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_T_G.png");
                    window_type = 'PICTURE_T_G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case '1CAS_T':
                    elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_T_G.png");
                    window_type = '1CAS_T_G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case '2CAS_T.png':
                    elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_T_G.png");
                    window_type = '2CAS_T_G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case '3CAS_T':
                    elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_T_G.png");
                    window_type = '3CAS_T_G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case 'AWING_T':
                    elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/AWING/AWING_T_G.png");
                    window_type = 'AWING_T_G';
                    $('#dispatcher').attr('value', window_type);
                    break;
                case 'PATIO_DOOR_T' :
                    elem.attr("src", "../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_T_G.png");
                    window_type = 'PATIO_DOOR_T_G';
                    $('#dispatcher').attr('value', window_type);
                    break;
            }
        }
    });

    $('#no_trigger').on('click', () => {
        $('#publisher').attr('value', 'grid_off');
        let win_type = $('#sample-window').attr('class');
        console.log(`${win_type}`);
        $('#trigger').css('color', 'black');
        $('#no_trigger').css({'color':'tomato', 'font-weight':'bold'});
        let elem = $('#sample-window');
        switch(win_type) {
            case 'AWING_B':
                elem.attr('src','../img/WINDOW_QUOTE_PICTURES/AWING/AWING_B.png');
                window_type = 'AWING_B';
                $('#dispatcher').attr('value', window_type);
                break;
            case 'AWING_T':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/AWING/AWING_T.png');
                window_type = 'AWING_T';
                $('#dispatcher').attr('value', window_type);
                break;
            case 'AWING_W':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/AWING/AWING_W.png');
                window_type = 'AWING_W';
                $('#dispatcher').attr('value', window_type);
                break;
            case '1CAS_B':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_B.png');
                window_type = '1CAS_B';
                $('#dispatcher').attr('value', window_type);
                break;
            case '1CAS_T':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_T.png');
                window_type = '1CAS_T';
                $('#dispatcher').attr('value', window_type);
                break;
            case '1CAS_W':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/CASEMENT/1CAS_W.png');
                window_type = '1CAS_W';
                $('#dispatcher').attr('value', window_type);
                break;
            case '2CAS_B':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_B.png');
                window_type = '2CAS_B';
                $('#dispatcher').attr('value', window_type);
                break;
            case '2CAS_T':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_T.png');
                window_type = '2CAS_T';
                $('#dispatcher').attr('value', window_type);
                break;
            case '2CAS_W':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/CASEMENT/2CAS_W.png');
                window_type = '2CAS_W';
                $('#dispatcher').attr('value', window_type);
                break;
            case '3CAS_B':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_B.png');
                window_type = '3CAS_B';
                $('#dispatcher').attr('value', window_type);
                break;
            case '3CAS_T':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_T.png');
                window_type = '3CAS_T';
                $('#dispatcher').attr('value', window_type);
                break;
            case '3CAS_W':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/CASEMENT/3CAS_W.png');
                window_type = '3CAS_W';
                $('#dispatcher').attr('value', window_type);
                break;
            case 'PATIO_DOOR_B':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_B.png');
                window_type = 'PATIO_DOOR_B';
                $('#dispatcher').attr('value', window_type);
                break;
            case 'PATIO_DOOR_T':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_T.png');
                window_type = 'PATIO_DOOR_T';
                $('#dispatcher').attr('value', window_type);
                break;
            case 'PDW5':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW5.png');
                window_type = 'PDW5';
                $('#dispatcher').attr('value', window_type);
                break;
            case 'PDW6':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW6.png');
                window_type = 'PDW6';
                $('#dispatcher').attr('value', window_type);
                break;
            case 'PDW8':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDW8.png');
                window_type = 'PDW8';
                $('#dispatcher').attr('value', window_type);
                break;
            case 'PDB5':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDB5.png');
                window_type = 'PDB5';
                $('#dispatcher').attr('value', window_type);
                break;
            case 'PDB6':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDB6.png');
                window_type = 'PDB6';
                $('#dispatcher').attr('value', window_type);
                break;
            case 'PDB8':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDB8.png');
                window_type = 'PDB8';
                $('#dispatcher').attr('value', window_type);
                break;
            case 'PDT5':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDT5.png');
                window_type = 'PDT5';
                $('#dispatcher').attr('value', window_type);
                break;
            case 'PDT6':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDT6.png');
                window_type = 'PDT6';
                $('#dispatcher').attr('value', window_type);
                break;
            case 'PDT8':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PDT8.png');
                window_type = 'PDT8';
                $('#dispatcher').attr('value', window_type);
                break;
            case 'PATIO_DOOR_W':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PATIO_DOOR/PATIO_DOOR_W.png');
                window_type = 'PATIO_DOOR_W';
                $('#dispatcher').attr('value', window_type);
                break;
            case 'PICTURE_B':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_B.png');
                window_type = 'PICTURE_B';
                $('#dispatcher').attr('value', window_type);
                break;
            case 'PICTURE_T':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_T.png');
                window_type = 'PICTURE_T';
                $('#dispatcher').attr('value', window_type);
                break;
            case 'PICTURE_W':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/PICTURE/PICTURE_W.png');
                window_type = 'PICTURE_W';
                $('#dispatcher').attr('value', window_type);
                break;
            case '3SLIDING_B':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_B.png');
                window_type = '3SLIDING_B';
                $('#dispatcher').attr('value', window_type);
                break;
            case '3SLIDING_W':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_W.png');
                window_type = '3SLIDING_W';
                $('#dispatcher').attr('value', window_type);
                break;
            case '3SLIDING_T':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/SLIDING_W/3SLIDING_T.png');
                window_type = '3SLIDING_T';
                $('#dispatcher').attr('value', window_type);
                break;
            case 'SLIDING_W':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_W.png');
                window_type = 'SLIDING_W';
                $('#dispatcher').attr('value', window_type);
                break;
            case 'SLIDING_B':
                elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_B.png');
                window_type = 'SLIDING_B';
                $('#dispatcher').attr('value', window_type);
                break;
            // default:
            //     elem.attr('src', '../img/WINDOW_QUOTE_PICTURES/SLIDING_W/SLIDING_T.png');
            //     window_type = 'SLIDING_T';
            //     $('#dispatcher').attr('value', window_type);
        }
    });

    $('#demo').on('change', () => {
        let demo = $('#demo').val();
        $('#demo').css('color','tomato');
        $('#qty').val(demo);
    });

    $('.standard-indicator').on('click', () => {
        $('#standard-install').val('standard');
        $('.exterior-indicator').css('color', 'black');
        $('.standard-indicator').css('color','tomato');
        console.log($('#standard-install').val());
    });

    $('.exterior-indicator').on('click', () => {
        $('#standard-install').val(`standard + exterior`);
        $('.standard-indicator').css('color', 'black');
        $('.exterior-indicator').css('color','tomato');
        console.log($('#standard-install').val());
    });

    $('.warranty-indicator').on('click', () => {
        $('#standard-warranty').val(`standard`);
        $('.no-warranty').css('color', 'black');
        $('.warranty-indicator').css('color','tomato');
        console.log($('#standard-warranty').val());
    });

    $('.no-warranty').on('click', () => {
        $('#standard-warranty').val(`no`);
        $('.warranty-indicator').css('color','black');
        $('.no-warranty').css('color','tomato');
        console.log($('#standard-warranty').val());
    });

    $('.double-indicator').on('click', () => {
        $('#glass-demo').val(`double pane`);
        $('.tripple-indicator').css('color', 'black');
        $('.double-indicator').css('color','tomato');

        console.log($('#glass-demo').val());
    });

    $('.tripple-indicator').on('click', () => {
        $('#glass-demo').val('tripple pane');
        $('.double-indicator').css('color', 'black');
        $('.tripple-indicator').css('color','tomato');
        console.log($('#glass-demo').val());
    });

    $('#frame-indicator-yes').on('click', () => {
        $('#foam-field').attr(`value`,`yes`);
        $('#frame-indicator-no').css('color','black');
        $('#frame-indicator-yes').css('color','tomato');
        console.log(`foam_field is ${$('#foam-field').attr(`value`)}`);
    });
    
    $('#frame-indicator-no').on('click', () => {
        $('#foam-field').val(`no`);
        $('#frame-indicator-yes').css('color', 'black');
        $('#frame-indicator-no').css('color','tomato');
        console.log($('#foam-field').val());
    });

    $('#trader').on('focus', (event) => {
        event.preventDefault();
    });
})

$('.normal_pattern').on('change',function () {
    let optionVal =  this.value;
    if(optionVal === 'yes'){
        $('.no').addClass('d-none')
        $('.yes').removeClass('d-none')
    }else{
        $('.no').removeClass('d-none')
        $('.yes').addClass('d-none')
    }
})


$('.bottom_pattern_dh').on('change', function() {
    let bottom_grid_val = this.value;
    let top_grid_val = $('.top_pattern_dh').val();
    console.log(bottom_grid_val);
    console.log(top_grid_val);
    console.log("this is going to be great!!!");
    if(bottom_grid_val == 8 && top_grid_val == 8) {
        document.getElementById('targetWindow').src = "../../public/img/WINDOW_QUOTE_PICTURES/DH/DHW_8O8.png";
    }
    else if(bottom_grid_val == 0 && top_grid_val == 2) {
        document.getElementById('targetWindow').src = "../../public/img/WINDOW_QUOTE_PICTURES/DH/DHW_2O0.png";
    }
    else if(bottom_grid_val == 2 && top_grid_val == 2) {
        document.getElementById('targetWindow').src = "../../public/img/WINDOW_QUOTE_PICTURES/DH/DHW_2O2.png";
    }
    else if(bottom_grid_val == 0 && top_grid_val == 4) {
        document.getElementById('targetWindow').src = "../../public/img/WINDOW_QUOTE_PICTURES/DH/DHW_4O0.png";
    }
    else if(bottom_grid_val == 4 && top_grid_val == 4) {
        document.getElementById('targetWindow').src = "../../public/img/WINDOW_QUOTE_PICTURES/DH/DHW_4O4.png";
    }
    else if(bottom_grid_val == 0 && top_grid_val == 6) {
        document.getElementById('targetWindow').src = "../../public/img/WINDOW_QUOTE_PICTURES/DH/DHW_6O0.png";
    }
    else if(bottom_grid_val == 6 && top_grid_val == 6) {
        document.getElementById('targetWindow').src = "../../public/img/WINDOW_QUOTE_PICTURES/DH/DHW_6O6.png";
    }
    else if(bottom_grid_val == 4 && top_grid_val == 8) {
        document.getElementById('targetWindow').src = "../../public/img/WINDOW_QUOTE_PICTURES/DH/DHW_8O0.png";
    }
});


$('.center_pattern_badh').on('change', function () {
    let optionVal =  this.value;
    if(optionVal == 'yes'){
        $('.badh_center_no').addClass('d-none');
        $('.badh_center_yes').removeClass('d-none');
    }else{
        $('.badh_center_no').removeClass('d-none');
        $('.badh_center_yes').addClass('d-none');
    }
})

$('.bottom_pattern_badh').on('change',function () {
    let optionVal = this.value;
    switch (optionVal) {
        case '0':
            $('.badh_bottom_2, .badh_bottom_4, .badh_bottom_6, .badh_bottom_8').addClass('d-none');
            $('.badh_bottom_0').removeClass('d-none');
            break;
        case '2':
            $('.badh_bottom_0, .badh_bottom_4, .badh_bottom_6, .badh_bottom_8').addClass('d-none');
            $('.badh_bottom_2').removeClass('d-none');
            break;
        case '4':
            $('.badh_bottom_0, .badh_bottom_2, .badh_bottom_6, .badh_bottom_8').addClass('d-none');
            $('.badh_bottom_4').removeClass('d-none');
            break;
        case '6':
            $('.badh_bottom_0, .badh_bottom_2, .badh_bottom_4, .badh_bottom_8').addClass('d-none');
            $('.badh_bottom_6').removeClass('d-none');
            break;
        case '8':
            $('.badh_bottom_0, .badh_bottom_2, .badh_bottom_4, .badh_bottom_6').addClass('d-none');
            $('.badh_bottom_8').removeClass('d-none');
            break;
    }
})


$('.top_pattern_badh').on('change',function () {
    let optionVal = this.value;

    switch (optionVal) {
        case '0':
            $('.badh_top_2, .badh_top_3, .badh_top_6, .badh_top_8').addClass('d-none');
            $('.badh_top_0').removeClass('d-none');
            break;
        case '2':
            $('.badh_top_0, .badh_top_3, .badh_top_6, .badh_top_8').addClass('d-none');
            $('.badh_top_2').removeClass('d-none');
            break;
        case '3':
            $('.badh_top_0, .badh_top_2, .badh_top_6, .badh_top_8').addClass('d-none');
            $('.badh_top_3').removeClass('d-none');
            break;
        case '6':
            $('.badh_top_0, .badh_top_2, .badh_top_3, .badh_top_8').addClass('d-none');
            $('.badh_top_6').removeClass('d-none');
            break;
        case '8':
            $('.badh_top_0, .badh_top_2, .badh_top_3, .badh_top_6').addClass('d-none');
            $('.badh_top_8').removeClass('d-none');
            break;
    }
})

$('.center_pattern_bac').on('change', function () {
    let optionVal = this.value;
    if(optionVal =='yes'){
        $('.bac_center_no').addClass('d-none');
        $('.bac_center_yes').removeClass('d-none');
    }else{
        $('.bac_center_no').removeClass('d-none');
        $('.bac_center_yes').addClass('d-none');
    }
})

$('.side_pattern_bac').on('change', function () {
    let optionVal = this.value;
    if(optionVal =='yes'){
        $('.bac_side_no').addClass('d-none');
        $('.bac_side_yes').removeClass('d-none');
    }else{
        $('.bac_side_no').removeClass('d-none');
        $('.bac_side_yes').addClass('d-none');
    }
})
