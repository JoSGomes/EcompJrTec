<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Enterprise;
class SearchEnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('searchEnterpriseUnique');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $nome = $request->input('inputEnterprise');
        $enterpriseID= Enterprise::where('nome', $nome)->value('id');
        $enterpriseName = Enterprise::where('nome', $nome)->value('nome');
        $enterpriseFed = Enterprise::where('nome', $nome)->value('federacao');
        $enterprise[] = $enterpriseID;
        $enterprise[] =  $enterpriseName;
        $enterprise[] = $enterpriseFed;
        if($enterprise == null){
            return Redirect::back()->withErrors(['errors' => 'Esta Empresa não existe!']); 
        }
        else{
            return view('wantedEnterprise', compact('enterprise'));
        }

    }

}
