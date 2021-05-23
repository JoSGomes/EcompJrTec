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
}
