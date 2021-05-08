<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Federation;
use App\Models\Enterprise;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $federations = Federation::all();
        $enterprises = Enterprise::all();
        $federationn = " ";
        return view('searchEnterprise', compact('federations', 'enterprises', 'federationn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $federations = Federation::all();
        $enterprisesObj = Enterprise::where('federacao', $request->chooseFederation);
        $enterprises = $enterprisesObj->get();
        if($enterprises->first() != null){
            $federationn = $enterprises->first()->federacao;
        }
        else{
            $federationn = $enterprises->first();
        }   
        return view('searchEnterprise', compact('enterprises', 'federations', 'federationn'));
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
