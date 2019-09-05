<?php

namespace App\Http\Controllers;

use App\Pr_dp_calculator_customer_quotation;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    /**
     * Display calculator form.
     *
     * @return \Illuminate\Http\Response
     */
    public function calculator()
    {
        return view('calculator_domestic_package');
    }

    /**
     * Posting pr_dp_calculator data to db from calculator form.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajaxRequestPost(Request $request)
    {
        $feed = new Pr_dp_calculator_customer_quotation;
        $feed->full_name = $request->input('name');
        $feed->phone_number = $request->input('phone');
        $feed->email = $request->input('email');
        $feed->location = $request->input('location');
        $feed->property = $request->input('property');
        $feed->premises = $request->input('building_amount');
        $feed->contents = $request->input('content_amount');
        $feed->all_risk = $request->input('risk_amount');
        $feed->domestic_employee = $request->input('domestic_amount');
        $feed->liability = $request->input('liability_amount');
        $feed->save();

        $input = $request->all();
        //return response()->json(['success' => $input]);
    }
}
