<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class MainnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function p_user(request $request)
    {
         
        $phone=$request->phone1;
        $address=$request->Address1;
        $city=$request->City1;
        $state=$request->state1;
        $pin=$request->pin1;

        $result = DB::insert("insert into user_register set phone=?,address=?,city=?,state=?,pincode=?,user_identity=0",[$phone,$address,$city,$state,$pin]);

        return view('welcome'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function c_user(request $request)
    {
        $phone=$request->phone;
        $address=$request->Address;
        $city=$request->City;
        $state=$request->state;
        $pin=$request->pincode;

        $result = DB::insert("insert into user_register set phone=?,address=?,city=?,state=?,pincode=?,user_identity=1",[$phone,$address,$city,$state,$pin]); 
        return view('welcome'); 
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
