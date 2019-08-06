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
}
