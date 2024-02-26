<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class acontroller extends Controller
{
    //
    public function create() {
        return view('average');
    }

    public function store(Request $request){
        $num1 = $request->num1;
        $num2 = $request->num2;
        $num3 = $request->num3;
        $prom = ($num1+$num2+$num3)/3;
        return "El promedio es: $prom";
    }
}
