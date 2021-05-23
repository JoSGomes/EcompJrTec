<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Federation;
use Illuminate\Support\Facades\Redirect;

class FederationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('registryFederation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $federationI = $request->input('inputFederation');
        $stateI = $request->input('inputFederationState');

        $valid = Federation::where('nome', $federationI)->value('nome');
        if($valid != null){
            return Redirect::back()->withErrors(['errors' => 'Uma Federação com este nome já existe!']); 
        }

        $federation = new Federation();
        $federation->nome = $federationI;
        $federation->estado = $stateI;
        $federation->save();
        return redirect('/home');
    }

}
