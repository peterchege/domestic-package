<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PremisesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function start(Request $request)
    {
        $building_amount = $request->input('building_amount');
        $content_amount = $request->input('content_amount');
        $domestic_amount = $request->input('domestic_amount');
        $risk_amount = $request->input('risk_amount');

        if ($building_amount !== 'null' && $content_amount !== 'null' &&  $risk_amount !== 'null' && $domestic_amount !== 'null') {
            return redirect()->route('product_content');
        } elseif ($building_amount !== 'null' && $content_amount == 'null' && $risk_amount == 'null' && $domestic_amount == 'null') {
            return redirect()->route('general_information');
        } elseif ($building_amount !== 'null' && $content_amount !== 'null' && $risk_amount == 'null' && $domestic_amount == 'null') {
            return redirect()->route('product_content');
        } elseif ($building_amount !== 'null' && $content_amount == 'null' && $risk_amount !== 'null' && $domestic_amount == 'null') {
            return redirect()->route('product_allrisk');
        } elseif ($building_amount !== 'null' && $content_amount == 'null' && $risk_amount == 'null' && $domestic_amount !== 'null') {
            return redirect()->route('product_domestic');
        } elseif ($building_amount !== 'null' && $content_amount !== 'null' && $risk_amount !== 'null' && $domestic_amount == 'null') {
            return redirect()->route('product_content');
        } elseif ($building_amount !== 'null' && $content_amount !== 'null' && $risk_amount == 'null' && $domestic_amount !== 'null') {
            return redirect()->route('product_content');
        } elseif ($building_amount !== 'null' && $content_amount == 'null' && $risk_amount !== 'null' && $domestic_amount !== 'null') {
            return redirect()->route('product_allrisk');
        } elseif ($building_amount == 'null' && $content_amount !== 'null' && $risk_amount == 'null' && $domestic_amount == 'null') {
            return redirect()->route('product_content');
        } elseif ($building_amount == 'null' && $content_amount !== 'null' && $risk_amount !== 'null' && $domestic_amount == 'null') {
            return redirect()->route('product_content');
        } elseif ($building_amount == 'null' && $content_amount !== 'null' && $risk_amount !== 'null' && $domestic_amount !== 'null') {
            return redirect()->route('product_content');
        } elseif ($building_amount == 'null' && $content_amount !== 'null' && $risk_amount == 'null' && $domestic_amount !== 'null') {
            return redirect()->route('product_content');
        }
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
    public function premisesStore(Request $request)
    {
        //storing premises form data
        $this->validate($request, [
            '' => 'required',
        ]);
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
        //
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
        //
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
