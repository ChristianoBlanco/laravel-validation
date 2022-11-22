<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helperController extends Controller
{
    //
    public static function form(){

        return view('index');

    }

    public static function cpf(Request $request){

       $rules =  [
            'cpf' => 'required|cpf',
        ];
        $message = [
            'cpf.cpf' => 'CPF Invalido !',
        ];
        $request->validate($rules, $message);

        //return "Cheguei no controller...";
        return redirect('/form')->with('msg_status', 'Dados atualizados com sucesso !');

    }
}
