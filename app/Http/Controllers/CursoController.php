<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //
    public function esPrimo($num){
        if ($num>0) {
            $cont = 0;
            for ($i=1; $i <= $num; $i++) {
                $div = $num % $i;
                if($div==0){
                    $cont = $cont + 1;
                }
            }
            if($cont==2){
                return 'Es primo';
            }
            else{
                return 'No es primo';
            }
        }

    }

    public function amigos($num1,$num2){
        $acum1 = 0;
        $acum2 = 0;
        for ($j=1; $j <$num1 ; $j++) {
            $div1 = $num1 % $j;
                if($div1==0){
                    $acum1 = $acum1 + $j;
                }
        }
        for ($k=1; $k <$num2 ; $k++) {
            $div2 = $num2 % $k;
                if($div2==0){
                    $acum2 = $acum2 + $k;
                }
        }

        if ($acum1==$num2 && $acum2==$num1) {
            return 'Son amigos';
        }
        else{
            return 'No son amigos';
        }

    }

    public function create(){

        return view('primenumbers');

    }

    public function store(Request $request){

        $num1=$request->num1;
        if ($num1>0) {
            $cont = 0;
            for ($i=1; $i <= $num1; $i++) {
                $div = $num1 % $i;
                if($div==0){
                    $cont = $cont + 1;
                }
            }
            if($cont==2){
                return 'Es primo';
            }
            else{
                return 'No es primo';
            }
        }
    }
}
