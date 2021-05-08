<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('authLogin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $email = $request->inputEmail;
        $senha = $request->inputSenha;
        $valid1 = User::where('email', $email)->value('email');
        $valid2 = User::where('email', $email)->value('password');
        if($valid1 == null){
            return Redirect::back()->withErrors(['errors' => 'E-mail está incorreto!']);
        }
        else if($senha != $valid2){
            return Redirect::back()->withErrors(['errors' => 'Senha está incorreta!']);

        }   
        else{
            return redirect('/home');

        }
        
    }



}
