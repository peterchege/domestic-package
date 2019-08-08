<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\User;
use App\Pr_dp_premise;
use App\Ref_roof_material;
use App\Ref_wall_material;
use App\SocialFacebookAccount;


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
        //storing premises form data
        $this->validate($request, [
            'wall_material' => 'required',
            'roof_material' => 'required',
            'building_height' => 'required',
            'wall_material' => 'required',
            'rad' => 'required|in:1,0',
            'dwelling' => 'required|in:private,self-contained,room-not-self-contained',
            'dwelling_occupation' => 'required|in:1,0',
            'thirty_day' => 'required|in:1,0',
            // 'let' => 'required|in:1,0'
            'repair_state' => 'required|in:1,0',
            'thirty_day' => 'required|in:1,0',
            'burglar_proof' => 'required|in:1,0'
        ]);

        $building_amount = $request->input('building_amount');
        $content_amount = $request->input('content_amount');
        $domestic_amount = $request->input('domestic_amount');
        $risk_amount = $request->input('risk_amount');

        //echo Str::random(32);
        $y = Str::random(32);
        // ob_start();
        // var_dump('soethin');
        echo Str::random(32);
        // print_r('hjd');
        die();

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
    { }

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