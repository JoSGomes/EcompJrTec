<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Federation;
use App\Models\Enterprise;
class GeneralController extends Controller
{
    /*$federations[] = ['FEJERO', 'SERJÚNIOR', 'Pará Junior', 'UNIJr-BA', 'Piauí Júnior', 'FEJECE', 'FEMTEJ', 'Roraima Júnior', 'Maranhão Júnior', 'FEJESC', 'Concentro', 'Acre Júnior', 'PB Júnior', 'TO Júnior', 'FEJEA', 'RN Júnior', 'FEJEAP','FEJERS', 'Brasil Júnior', 'FEJEMG', 'Goiás Júnior', 'FEJEPAR', 'FEJESP', 'FEJEPE','FEJEMS', 'RioJunior', 'Juniores', 'Baré Júnior']; */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataEnterprises = Enterprise::all();
        $dataFederations = Federation::all();


        return view('home', compact('dataEnterprises', 'dataFederations'));
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
