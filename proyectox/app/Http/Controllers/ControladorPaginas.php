<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorForm1;

class ControladorPaginas extends Controller
{
    function fhome(){
        return view('home');
    }

    function fingresar(){
        return view('ingresar');
    }

    function frecuerdos($nombre="Invitado"){
        $arraynombres = ['Angel', 'Javier', 'Yesenia'];
        return view('recuerdos', compact('nombre', 'arraynombres'));
    }
/*
    public function procesarRecuerdos(Request $req){
        return 'Tu recuerdo se esta guardando';
    }
*/

    public function procesarRecuerdos(validadorForm1 $req){
        //return $req->all();

        return redirect('/ingresar')->with('confirmacion', 'tu recuerdo llego al controlador');
        
        
        /*if(request()->filled('txtTitulo')){
            return 'Se lleno el titulo:'.request()->input('txtTitulo');
        }
            return 'No se lleno el titulo';*/



    }

    
}
