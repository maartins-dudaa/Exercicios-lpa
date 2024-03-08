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


                Route::get('divisao', function(Request $request){
                    $primeiraEntrada = $request->input('primeiro numero');
                    $segundaEntrada = $request->input('segundo numero');
                    $resultado = $primeiraEntrada/$segundaEntrada;
                    return $resultado;
                });



                Route::get('multiplicar', function(Request $request){
                    $primeiraEntrada = $request->input('primeiro numero');
                    $segundaEntrada = $request->input('segundo numero');
                    $resultado = $primeiraEntrada * $segundaEntrada;
                    return $resultado;
                });


                Route::get('média', function(Request $request){
                    $primeiraEntrada = $request->input('primeira nota');
                    $segundaEntrada = $request->input('segunda nota');
                    $terceiraEntrada = $request->input('terceira nota');
                    $quartaEntrada = $request->input('quarta nota');
                    $quintaEntrada =$request->input('quinta nota');
                    $media = ($primeiraEntrada + $segundaEntrada + $terceiraEntrada + $quartaEntrada + $quintaEntrada)/5;
                    return $media;
                });


                Route::get('divisao 2', function(Request $request){
                    $primeiraEntrada = $request->input('primeiro numero');
                    $segundaEntrada = $request->input('segundo numero');
                    $resultado = $segundaEntrada/$primeiraEntrada;
                    return $resultado;
                    });


                    Route::get('dobro', function(Request $request){
                        $numero = $request->input('numero');
                        $resultado = $numero*2;
                        return 'O dobro do numero ' . $numero . ' e igual a ' . $resultado;
                        });


                        Route::get('area', function(Request $request){
                            $lado1 = $request->input('primeiro lado');
                            $lado2 = $request->input('segundo lado');
                            $resultado = $lado1 * $lado2;
                            return $resultado;
                        });


                        Route::get('desconto', function(Request $request){
                            $valorProduto = $request->input('preço');
                            $descontoDesejado = $request->input('desconto desejado');
                            $desconto = ($valorProduto * $descontoDesejado)/100;
                            $resultado = $valorProduto - $desconto;
                            return $resultado;
                        });


                        Route::get('salario', function(Request $request){
                            $primeiroSalario = $request->input('salario anterior');
                            $percentualAumento = $request->input('percentual de aumento');
                            $valorAumento = ($primeiroSalario * $percentualAumento)/100;
                            $salarioAtual = $primeiroSalario + $valorAumento;
                            return 'Salario anterior: ' . $primeiroSalario . '; Percentual de aumento: ' . $percentualAumento . ', Salario atual: ' . $salarioAtual;
                        });


                        Route::get('recompensa', function(Request $request){
                            $valorCompra = $request->input('valorCompra');
                            $pontosRecompensa = $valorCompra/10;
                            return 'Pontos de recompensa: ' . $pontosRecompensa;
                        });

                        

                        Route::get('comissao', function(Request $request){
                            $totalVendas = $request->input('totalVendas');
                            $comissaoPercentual = ($totalVendas * 5)/100;
                            return $comissaoPercentual;
                        });
                        