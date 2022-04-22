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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Session::flush();
        $locations = Locations::orderBy('abbr_name')->get();

        $quotes = new BeforeQuotes;
        $quotes::truncate();
        $random_number = substr(md5(mt_rand()), 0, 5);
        Session::put('random_number', $random_number);
        return view('frontend.home', compact('locations'));
    }

    public function mainCalc(Request $request, $initialize)
    {
        if($initialize == 1){
            Session::forget('calcList');
        }
        $location = $request->input('location') ?? '1';
        $random_number = Session::get('random_number');

        $temps = array_keys(Session::all());
        foreach($temps as $temp) {
            if($temp !== 'random_number' && $temp !== 'state' && $temp !== 'state_abbr') {
                Session::forget($temp);
            }
        }

        if($request->input('state')) {
            $state = $request->input('state');
            $temp = Locations::where('name', $state)->first();
            $state_abbr = $temp->abbr_name;
            Session::put('state', $state);
            Session::put('state_abbr', $state_abbr);
        }

        return view('frontend.main-calc');
    }

    public function individualSecond(Request $request, $calc_type) {

        if(!(session::has('width') && session::has('height')) || ($request->has('cop'))) {
            $width = $request->input('width');
            $height = $request->input('height');
            $total_size = $width + $height;
            $data = CalcValues::where([
                'calc_type' => $calc_type,
                'total_size' => $total_size
            ])->first();
            $minValue = CalcValues::where('calc_type', $calc_type)->min('total_size');
            $maxValue = CalcValues::where('calc_type', $calc_type)->max('total_size');
            if($total_size > $maxValue || $total_size < $minValue) {
                return redirect()->back()->with(['flash_error' => 'Size is not available']);
            }
            session::put('width', $width);
            session::put('height', $height);
        }
        if($calc_type == 'patio1') {
            session::put('width', 60);
            session::put('height', 79);
        }
        elseif($calc_type == 'patio2') {
            session::put('width', 72);
            session::put('height', 79);
        }
        elseif($calc_type == 'patio3') {
            session::put('width', 96);
            session::put('height', 79);
        }

        return view('frontend.individual-calc-second')->with('calc_type', $calc_type);
    }

    public function individualFourth(Request $request, $win_type = null) {

        if($request->input('window_type') === null && ($win_type === 'dh' || $win_type === 'pw'
            || $win_type === 'c1' || $win_type === 'c2' || $win_type === 'c3' || $win_type === 'sw2'
            || $win_type === 'sw3' || $win_type === 'aw' || $win_type === 'gw') ) {
            return redirect()->back()->with(['error'=>'choose items correctly']);
        }
        if($request->input('window_type') !== null && !session::has('win_type')) {
            $win_type = $request->input('window_type');
            session::put('win_type', $win_type);
            if($win_type[strlen($win_type)-1]==='T') {
                session::put('interior_color', 'tan');
                session::put('exterior_color', 'tan');
            }
            elseif($win_type[strlen($win_type)-1]==='B') {
                session::put('interior_color', 'white');
                session::put('exterior_color', 'black');
            }
            elseif($win_type[strlen($win_type)-1]==='W') {
                session::put('interior_color', 'white');
                session::put('exterior_color', 'white');
            }
            elseif($win_type[strlen($win_type)-1]==='G' && $win_type[strlen($win_type)-3]==='W') {
                session::put('interior_color', 'white');
                session::put('exterior_color', 'white');
            }
            elseif($win_type[strlen($win_type)-1]==='G' && $win_type[strlen($win_type)-3]==='B') {
                session::put('interior_color', 'white');
                session::put('exterior_color', 'black');
            }
            elseif($win_type[strlen($win_type)-1]==='G' && $win_type[strlen($win_type)-3]==='T') {
                session::put('interior_color', 'tan');
                session::put('exterior_color', 'tan');
            }
        }
        elseif($win_type !== null && strlen($win_type) > 6 && !session::has('win_type') ) {
            Session::put('win_type', $win_type);
            if($win_type[strlen($win_type)-5] === 'W') {
                session::put('interior_color', 'white');
                session::put('exterior_color', 'white');
            }
            elseif($win_type[strlen($win_type)-5] === 'B') {
                session::put('interior_color', 'white');
                session::put('exterior_color', 'black');
            }
            else {
                session::put('interior_color', 'tan');
                session::put('exterior_color', 'tan');
            }
        }
        elseif(!session::has('win_type')) {
            session::put('win_type', $win_type);
            if($win_type[strlen($win_type)-1] === 'B') {
                session::put('interior_color', 'white');
                session::put('exterior_color', 'black');
            }

            elseif($win_type[strlen($win_type)-1] === 'W') {

                session::put('interior_color', 'white');
                session::put('exterior_color', 'white');
            }

            else {
                session::put('interior_color', 'tan');
                session::put('exteror_color', 'tan');
            }
        }

        Session::put('win_type', $win_type);

        return view('frontend.individual-calc-fourth', compact('win_type'));
    }

    public function individualFifth(Request $request) {
        $glass = $request->input('glass-demo');
        $foam_field = $request->input('foam_field');

        if($glass == null || $foam_field == null) {
            return redirect()->back()->with(['error' => 'Please choose neccessary items!']);
        }

        Session::put('glass', $glass);
        Session::put('foam_field', $foam_field);

        return view('frontend.individual-calc-fifth');
    }

    public function individualFinal(Request $request) {

        $qty = $request->input('qty');

        $standard = $request->input('standard-install');
        $warranty = $request->input('standard-warranty');

        if($qty == null || $standard == null || $warranty == null) {
            return redirect()->back()->with(['flash_error' => 'Please chooose neccessary items']);
        }

        Session::put('qty', $qty);
        session::put('standard', $standard);
        session::put('warranty', $warranty);

        $width = session::get('width');
        $height = session::get('height');
        $exterior_color = session::get('exterior_color');
        $interior_color = session::get('interior_color');
        $glass = session::get('glass');
        $win_type = session::get('win_type');

        $quotes = new BeforeQuotes;
        $quotes->win_type = session::get('win_type');
        $quotes->width = session::get('width');
        $quotes->height = session::get('height');
        $quotes->foam_field = session::get('foam_field');
        $quotes->exterior_color = session::get('exterior_color');
        $quotes->interior_color = session::get('interior_color');
        $quotes->standard = session::get('standard');
        $quotes->warranty = session::get('warranty');
        $quotes->glass = session::get('glass');
        $quotes->qty = session::get('qty');
        $quotes->quote_number = session::get('random_number');
        $quotes->save();

        $final_quotes = new FinalQuotes;
        $final_quotes->win_type = session::get('win_type');
        $final_quotes->width = session::get('width');
        $final_quotes->height = session::get('height');
        $final_quotes->foam_field = session::get('foam_field');
        $final_quotes->exterior_color = session::get('exterior_color');
        $final_quotes->interior_color = session::get('interior_color');
        $final_quotes->standard = session::get('standard');
        $final_quotes->warranty = session::get('warranty');
        $final_quotes->glass = session::get('glass');
        $final_quotes->qty = session::get('qty');
        $final_quotes->quote_number = session::get('random_number');
        $final_quotes->save();

        $results = $quotes::all();

        return view('frontend.individual-calc-final', compact('results'));
    }

    public function getQuotes(Request $request) {

        $inputs = $request->input('id');
        $qty = $request->input('qty');

        $total_price = 0;

        foreach($inputs as $window) {
            $id = $window;
            $targetWindow = BeforeQuotes::find($id);
            $targetWindow2 = FinalQuotes::find($id);
            $targetWindow->qty = $qty[$id];
            $targetWindow2->qty = $qty[$id];
            $targetWindow->update();
            $targetWindow2->update();
            $total_size = ($targetWindow->width + $targetWindow->height);

            switch($targetWindow->win_type) {
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                    $total_price *= $targetWindow->qty;
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
                        $total_price *= $targetWindow->qty;
                    }
            }

        }

        $quotes = new BeforeQuotes;
        $results = $quotes::all();
        Session::put('total_price', $total_price);
        return view('frontend.quote', compact('results'));
    }

    public function subCalc($calc_type)
    {
        return view('frontend.sub-calc', compact('calc_type'));
    }

    public function individualCalc($calc_type)
    {
        return view('frontend.individual-calc', compact(['calc_type']));
    }

    public function individualThird(Request $request, $win_type = null) {

        if($request->input('value')) {
            $win_type = $request->input('value');
        }
        else {
            $win_type = $win_type;
        }

        return view('frontend.individual-calc-third')->with('win_type', $win_type);
    }

    public function result(Request $request)
    {
        $total_price = 0;
        $location = Session::get('location') ?? '1';
        $calc_type = $request->input('calc_type');
        $width = $request->input('width');
        $height = $request->input('height');
        $outside_color = $request->input('outside_color');
        $inside_color = $request->input('inside_color');
        $thickness = $request->input('thickness');
        $privacy_panel = $request->input('privacy_panel');
        $center_pattern = $request->input('center_pattern');
        $top_pattern = $request->input('top_pattern');
        $bottom_pattern = $request->input('bottom_pattern');
        $warranty = $request->input('warranty');
        $quantity = $request->input('quantity');
        if($calc_type !== 'sd') {
            $total_size = $width + $height;
        }
        else {
            $total_size = $width;
        }

        $data = CalcValues::where([
            'calc_type' => $calc_type,
            'total_size' => $total_size
        ])->first();

        $rowCount = CalcValues::where([
            'calc_type' => $calc_type,
            'total_size' => $total_size
        ])->count();

        if($rowCount >= 1){
            $total_price += $data->base_price;

            if($outside_color == 'black' || $outside_color == 'beige'){
                $total_price += $data->outside_color_price;
            }

            if($inside_color == 'black' || $inside_color == 'beige'){
                $total_price += $data->inner_color_price;
            }

            $total_price += $data->thickness_color_price;


            if($calc_type == 'bac')
            {
                if($center_pattern == 'yes'){
                    $total_price += $data->center_pattern_price;
                }

                if($top_pattern == 'yes'){
                    $total_price += $data->top_pattern_price;
                }
            }
            else if ($calc_type == 'badh')
            {
                if($center_pattern == 'yes'){
                    $total_price += $data->center_pattern_price;
                }

                if($top_pattern != 0){
                    $total_price += $data->top_pattern_price;
                }

                if($bottom_pattern != 0){
                    $total_price += $data->bottom_pattern_price;
                }

            }
            else if ($calc_type == 'dh')
            {
                if($top_pattern != 0){
                    $total_price += $data->top_pattern_price;
                }

                if($bottom_pattern != 0){
                    $total_price += $data->bottom_pattern_price;
                }
            }
            else
            {
                if($center_pattern == 'yes'){
                    $total_price += $data->center_pattern_price;
                }
            }

            if($privacy_panel == 'yes'){
                $total_price += $data->privacy_panel_price;
            }

            if($warranty == 'yes'){
                $total_price += $data->extra_warranty_price;
            }

            $locationVal = Locations::where('id', $location)->value('percentage');

            if($locationVal != 0){
                $total_price = $total_price + ($total_price / 100 * $locationVal);
            }

            $total_price = $total_price * $quantity;

            $sum = 0; $calcList = '';
            if(Session::has('calcList'))
            {
                $calcList = json_decode(\Illuminate\Support\Facades\Session::get('calcList'));

                $tempArray = array(
                    'calc_type' =>$calc_type,
                    'total_price' => $total_price,
                    'width' => $width,
                    'height' => $height,
                    'quantity' => $quantity,
                    'outside_color' => $outside_color,
                    'inside_color' => $inside_color,
                    'warranty' => $warranty,
                    'thickness' => $thickness,
                    'privacy_panel' => $privacy_panel,
                    'center_pattern' => $center_pattern,
                    'top_pattern' => $top_pattern,
                    'bottom_pattern' => $bottom_pattern,
                );

                //check if width, height, calc type is same
                foreach ($calcList as $key=>$val){
                    if ($val->calc_type == $calc_type && $val->width == $width && $val->height == $height){
                        $val->total_price += $total_price;
                        $val->quantity += $quantity;
                    }
                }

                if(  array_search($calc_type, array_column($calcList, 'calc_type'))!== FALSE
                    && array_search($width, array_column($calcList, 'width'))!== FALSE
                    && array_search($height, array_column($calcList, 'height'))!== FALSE)
                {

                }else{
                    array_push($calcList, $tempArray);
                    $calcList = json_decode(json_encode($calcList));
                }

                foreach ($calcList as $val){
                    $sum+=$val->total_price;
                }
            }
            return view('frontend.result', compact('calcList', 'sum','calc_type', 'total_price', 'width', 'height', 'quantity','outside_color', 'inside_color', 'warranty', 'thickness', 'privacy_panel', 'top_pattern', 'center_pattern', 'bottom_pattern'));

        }else{
            $minValue = CalcValues::where('calc_type', $calc_type)->min('total_size');
            $maxValue = CalcValues::where('calc_type', $calc_type)->max('total_size');
            return redirect()->back()->with(['flash_error' => 'Size is not available']);
        }

    }

    public function addMore(Request $request)
    {
        $calc_type = $request->input('calc_type');
        $total_price = $request->input('total_price');
        $width = $request->input('width');
        $height = $request->input('height');
        $quantity = $request->input('quantity');
        $warranty = $request->input('warranty');
        $inside_color = $request->input('inside_color');
        $outside_color = $request->input('outside_color');
        $thickness = $request->input('thickness');
        $privacy_panel = $request->input('privacy_panel');
        $center_pattern = $request->input('center_pattern');
        $top_pattern = $request->input('top_pattern');
        $bottom_pattern = $request->input('bottom_pattern');

        //store calc type and total price to the session
        $this->setCalcList($quantity, $calc_type, $total_price, $width, $height, $outside_color, $inside_color, $thickness, $warranty, $privacy_panel, $center_pattern, $top_pattern, $bottom_pattern);

        return redirect()->route('front.main-calc', $initialize = 0);
    }

    private function setCalcList($quantity, $calc_type, $total_price, $width, $height, $outside_color, $inside_color, $thickness, $warranty, $privacy_panel, $center_pattern, $top_pattern, $bottom_pattern)
    {
        if(session('calcList') == null) {
            $originalValue = array();
        }else{
            $originalValue = json_decode(session('calcList'));
        }

        $tempArray = array(
            'calc_type' =>$calc_type,
            'total_price' => $total_price,
            'width' => $width,
            'height' => $height,
            'quantity' => $quantity,
            'outside_color' => $outside_color,
            'inside_color' => $inside_color,
            'thickness' => $thickness,
            'warranty' => $warranty,
            'privacy_panel'=>$privacy_panel,
            'top_pattern'=>$top_pattern,
            'center_pattern'=>$center_pattern,
            'bottom_pattern'=>$bottom_pattern
        );

        //check if width, height, calc type is same
        foreach ($originalValue as $key=>$val){
            if ($val->calc_type == $calc_type && $val->width == $width && $val->height == $height) {
                $val->total_price += $total_price;
                $val->quantity += $quantity;
            }
        }

        //if specific value exist or not in the array
        if(  array_search($calc_type, array_column($originalValue, 'calc_type'))!== FALSE
            && array_search($width, array_column($originalValue, 'width'))!== FALSE
            && array_search($height, array_column($originalValue, 'height'))!== FALSE )
        {
            $calcList = json_encode($originalValue);
        }
        else {
            array_push($originalValue, $tempArray);
            $calcList = json_encode($originalValue);
        }

        Session::put('calcList', $calcList);
        Session::put('height', $height);
        Session::put('width', $width);
        Session::put('outside_color', $outside_color);
        Session::put('inside_color', $inside_color);
        Session::put('warranty', $warranty);
        Session::put('thickness', $thickness);
        Session::put('privacy_panel', $privacy_panel);
        Session::put('top_pattern', $top_pattern);
        Session::put('center_pattern', $center_pattern);
        Session::put('bottom_pattern', $bottom_pattern);
    }

    public function checkOut(Request $request)
    {
        return view('frontend.checkout');
    }

    public function join(Request $request) {

        return view('frontend.join');
    }

    public function disclosure() {
        return view('frontend.disclosure');
    }

    public function contractor_home() {
        return view('frontend.contractor-portal-home');
    }

    public function displayContractorStore() {
        return view('frontend.contractor-store');
    }

}
