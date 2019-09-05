<?php

namespace App\Http\Controllers;

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
        $input = $request->all();
        return response()->json(['success' => $input]);
    }
}
