<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('authRegister');
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
        $nome = $request->input('inputNome');
        $email = $request->input('inputEmail');
        $senha = $request->input('inputSenha');

        $valid = User::where('email', $email)->value('email');
        if($valid != null){
            return Redirect::back()->withErrors(['errors' => 'Este E-mail já possui um cadastro!']); 

        }

        $user = new User();

        $user->name = $nome;
        $user->email = $email;
        $user->password = $senha;
        $user->save();
        
        return redirect('/in');
    }

}
