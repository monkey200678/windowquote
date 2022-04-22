<?php

namespace App\Http\Controllers;

use App\Models\Bio;
use App\Models\CalcValues;
use App\Models\BeforeQuotes;
use App\Models\FinalQuotes;
use App\Models\Director;
use App\Models\Locations;
use App\Models\Movie;
use App\Models\Studio;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class RetrieveController extends Controller {

    public function __construct() {

    }

    public function retrieve_quote(Request $request) {

        $quote_number = $request->input('quote_number');
        $quote_number = Str::lower($quote_number);
        $temp = substr($quote_number, 5, 9);
        $results = FinalQuotes::where('quote_number', $temp)->get();
        
        $total_price = 0;

        foreach($results as $result) {
            
            $total_size = ($result->width + $result->height);
            
            switch($result->win_type) {
                case 'AWING_W':
                    $data = CalcValues::where([
                        'calc_type'=>'aw',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case 'AWING_W_G':
                    $data = CalcValues::where([
                        'calc_type'=>'aw',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case 'AWING_B':
                    $data = CalcValues::where([
                        'calc_type'=>'aw',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case 'AWING_B_G':
                    $data = CalcValues::where([
                        'calc_type'=>'aw',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case 'AWING_T':
                    $data = CalcValues::where([
                        'calc_type'=>'aw',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case 'AWING_T_G':
                    $data = CalcValues::where([
                        'calc_type'=>'aw',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case '1CAS_T':
                    $data = CalcValues::where([
                        'calc_type'=>'c1',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case '1CAS_T_G':
                    $data = CalcValues::where([
                        'calc_type'=>'c1',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case '1CAS_W':
                    $data = CalcValues::where([
                        'calc_type'=>'c1',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case '1CAS_W_G':
                    $data = CalcValues::where([
                        'calc_type'=>'c1',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case '1CAS_B':
                    $data = CalcValues::where([
                        'calc_type'=>'c1',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case '1CAS_B_G':
                    $data = CalcValues::where([
                        'calc_type'=>'c1',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case '2CAS_T':
                    $data = CalcValues::where([
                        'calc_type'=>'c2',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case '2CAS_T_G':
                    $data = CalcValues::where([
                        'calc_type'=>'c2',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case '2CAS_W':
                    $data = CalcValues::where([
                        'calc_type'=>'c2',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case '2CAS_W_G':
                    $data = CalcValues::where([
                        'calc_type'=>'c2',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case '2CAS_B':
                    $data = CalcValues::where([
                        'calc_type'=>'c2',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case '2CAS_B_G':
                    $data = CalcValues::where([
                        'calc_type'=>'c2',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case '3CAS_T':
                    $data = CalcValues::where([
                        'calc_type'=>'c3',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case '3CAS_T_G':
                    $data = CalcValues::where([
                        'calc_type'=>'c3',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case '3CAS_W':
                    $data = CalcValues::where([
                        'calc_type'=>'c3',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case '3CAS_W_G':
                    $data = CalcValues::where([
                        'calc_type'=>'c3',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case '3CAS_B':
                    $data = CalcValues::where([
                        'calc_type'=>'c3',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case '3CAS_B_G':
                    $data = CalcValues::where([
                        'calc_type'=>'c3',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case 'PICTURE_B':
                    $data = CalcValues::where([
                        'calc_type'=>'pw',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case 'PICTURE_B_G':
                    $data = CalcValues::where([
                        'calc_type'=>'pw',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case 'PICTURE_T_G':
                    $data = CalcValues::where([
                        'calc_type'=>'pw',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case 'PICTURE_T':
                    $data = CalcValues::where([
                        'calc_type'=>'pw',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case 'PICTURE_W_G':
                    $data = CalcValues::where([
                        'calc_type'=>'pw',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                case 'PICTURE_W':
                    $data = CalcValues::where([
                        'calc_type'=>'pw',
                        'total_size'=>$total_size
                    ])->first();
                    $data = json_encode($data);
                    $data = json_decode($data);
                    $total_price += $data->base_price;
                    $total_price += $data->outside_color_price;
                    $total_price += $data->inner_color_price;
                    $total_price += $data->thickness_color_price;
                    $total_price *= $result->qty;
                    break;
                default: 
                    $data = CalcValues::where([
                        'calc_type'=>'dh',
                        'total_size'=>$total_size
                    ])->first();
                    $rowCount = CalcValues::where([
                        'calc_type'=>'dh',
                        'total_size'=>$total_size
                    ])->count();

                    if($rowCount>=1) {
                        $data = json_encode($data);
                        $data = json_decode($data);
                        $total_price += $data->base_price;
                        $total_price += $data->outside_color_price;
                        $total_price += $data->inner_color_price;
                        $total_price += $data->thickness_color_price;
                        $total_price *= $result->qty;
                    }
            }
            
        }

        Session::put('total_price', $total_price);
        return view('frontend.retrieve-quote')->with('results', $results);
    }
}