<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColaboradorController extends Controller{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function getColaboradores()
    {        
        return view('Colaborador.Home');
   
    }

}