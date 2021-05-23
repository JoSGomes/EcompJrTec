<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Enterprise;
use App\Models\Federation;

class EnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $federations = Federation::all();
        return view('registryEnterprise', compact('federations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enterpriseI = $request->input('inputEnterprise');
        $federationI = $request->input('chooseFederation');

        $valid = Enterprise::where('nome', $enterpriseI)->value('nome');
        if($valid != null){
            return Redirect::back()->withErrors(['errors' => 'Já existe uma Empresa Junior com este nome!']); 
        }
        $enterprise = new Enterprise();
        $enterprise->nome = $enterpriseI;
        $enterprise->federacao = $federationI;
        $enterprise->save();
        return redirect('/home');
    }

}
