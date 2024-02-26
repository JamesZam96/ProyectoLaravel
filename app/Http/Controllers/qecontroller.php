<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class qecontroller extends Controller
{
    //
    public function create(){
        return view('quadraticecuation');
    }

    public function store(Request $request){
        $a = $request->a;
        $b = $request->b;
        $c = $request->c;
        $raiz = $b*$b-4*$a*$c;
        if($a!=0 && $raiz>0){
            $qe1 = (((-$b)+sqrt($raiz))/2*$a);
            $qe2 = (((-$b)-sqrt($raiz))/2*$a);
            return "El resultado de la formula cuadratica es: $qe1 y $qe2";
        }
        else{
            return 'Valores incorrectos';
        }

    }
}
