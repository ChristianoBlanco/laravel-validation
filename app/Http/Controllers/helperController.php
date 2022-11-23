<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use geekcom\ValidatorDocs\Rules\Cpf;
use geekcom\ValidatorDocs\Rules\Cnpj;
use geekcom\ValidatorDocs\Rules\Cnh;
use geekcom\ValidatorDocs\Rules\Renavam;
use geekcom\ValidatorDocs\Rules\Placa;
use geekcom\ValidatorDocs\Rules\Ddd;
use geekcom\ValidatorDocs\Rules\InscricaoEstadual;
use geekcom\ValidatorDocs\Rules\Nis;
use geekcom\ValidatorDocs\Rules\Cns;
use geekcom\ValidatorDocs\Rules\Certidao;
use geekcom\ValidatorDocs\Rules\TituloEleitoral;

class helperController extends Controller
{


    //
    public static function form(){

        return view('index');

    }

    public static function cpf(Request $request){

        $rules =  [
            #'cpf' => 'required|Cpf',
            #'cnpj' => 'required|Cnpj',
            #'cpfcnpj' => 'required|cpf_cnpj',
            #'cnh' => 'required|Cnh',
            #'renavam' => 'required|Renavam',
            #'placa' => 'required|Placa',
            #'inscricao_estadual' => 'required|inscricao_estadual:RJ',
            #'nis' => 'required|nis',
            #'cns' => 'required|Cns',
            #'certidao' => 'required|Certidao',
            #'ddd' => 'required|Ddd',
            #'titulo' => 'required|titulo_eleitor',
        ];

        $message = [
            #'cpf.Cpf' => 'Formato falso CPF !',
            #'cpf.Cnpj' => 'Formato falso CNPJ !',
            #'cpfcnpj.cpf_cnpj' => 'Formato falso do CPF ou CNPJ !',
            #'cnh.Cnh' => 'Formato falso da sua CNH !',
            #'renavam.Renavam' => 'Formato falso do seu  Renavam!',
            #'placa.Placa' => 'Formato falso da sua Placa do carro !',
            #'inscricao_estadual.inscricao_estadual:RJ' => 'Formato falso da Inscricao Estadual !',
            #'nis.nis' => 'Formato falso do PIS/PASEP/NIT/NIS !',
            #'cns.Cns' => 'Formato falso do seu CNS !',
            #'certidao.Certidao' => 'Formato falso da Certidao  !',
            #'ddd.Ddd' => 'Formato falso do DDD !',
            #'titulo.titulo_eleitor' => 'Titulo falso !',
        ];


        $request->validate($rules, $message);

        //return "Cheguei no controller...";
        return redirect('/form')->with('msg_status', 'Dados atualizados com sucesso !');

    }
}

