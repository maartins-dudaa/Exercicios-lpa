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