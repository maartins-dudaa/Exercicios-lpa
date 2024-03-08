<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('receber/nome', function(Request $request){
    $nome = $request->input('nome');
    return $nome;
    });


    Route::get('nome/idade', function(Request $request){
        $nome = $request->input('nome');
        $idade = $request->input('idade');
        return 'Meu nome é ' . $nome . ' tenho ' . $idade . 'anos de idade';
        });


        Route::get('nome/nascimento/cidade', function(Request $request){
            $nome = $request->input('nome');
            $nascimento = $request->input ('nascimento');
            $cidade = $request->input('cidade');
            return 'Meu nome é ' . $nome . ' nasci no ano de ' . $nascimento . ' na cidade de  ' . $cidade;
            });

            
            Route::get('somar', function(Request $request){
                $primeiraEntrada = $request->input('primeiro numero');
                $segundaEntrada = $request->input('segundo numero');
                $soma = ($primeiraEntrada + $segundaEntrada);
                return $soma;
                });


                Route::get('subtrair', function(Request $request){
                    $primeiraEntrada = $request->input('primeiro numero');
                    $segundaEntrada = $request->input('segundo numero');
                    $terceiraEntrada = $request->input('terceiro numero');
                    $subtração = ($primeiraEntrada - $segundaEntrada - $terceiraEntrada);
                    return $subtração;
                });