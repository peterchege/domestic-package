<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
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
    public function index()
    {
        return view('building_content');
    }

    /**
     * Display premises form.
     *
     * @return \Illuminate\Http\Response
     */
    public function premises()
    {
        return view('premises');
    }


    /**
     * Display product_content form.
     *
     * @return \Illuminate\Http\Response
     */
    public function product_content()
    {
        return view('product_content');
    }

    /**
     * Display product_allrisk form.
     *
     * @return \Illuminate\Http\Response
     */
    public function product_allrisk()
    {
        return view('product_allrisk');
    }

    /**
     * Display product_domestic form.
     *
     * @return \Illuminate\Http\Response
     */
    public function product_domestic()
    {
        return view('product_domestic');
    }

    /**
     * Display general_information form.
     *
     * @return \Illuminate\Http\Response
     */
    public function general_information()
    {
        return view('general_information');
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
