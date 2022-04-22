<?php

namespace App\Http\Controllers;

use App\Models\CalcValues;
use Illuminate\Http\Request;

class CalcvalueController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $calc_type = $request->input('calc_type') ?? 'dh';
        $datas = CalcValues::where('calc_type', $calc_type)->get();
        $calc_types = CalcValues::select('calc_type')->distinct()->get();

        return view('admin.calcs.index', compact('datas', 'calc_types', 'calc_type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = CalcValues::findorFail($id);

        return view('admin.calcs.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $obj = CalcValues::findorFail($id);

        $obj->total_size = $request->input('total_size');
        $obj->base_price = $request->input('base_price');
        $obj->outside_color_price = $request->input('outside_color_price');
        $obj->inner_color_price = $request->input('inner_color_price');
        $obj->thickness_color_price = $request->input('thickness_color');
        $obj->center_pattern_color_price = $request->input('center_pattern_color_price');
        $obj->top_pattern_color_price = $request->input('top_pattern_color_price');
        $obj->bottom_pattern_color_price = $request->input('bottom_pattern_color_price');
        $obj->privacy_panel_price = $request->input('privacy_panel_price');
        $obj->extra_warranty_price = $request->input('extra_warranty_price');
        $obj->update();

        return redirect()->back()->with(['flash_success' => 'Successfully Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
