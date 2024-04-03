<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;

Route::get('nome', function (Request $request) {
    $nome = $request->input('nome');
    return $nome;
});


Route::get('nome/idade', function (Request $request) {
    $nome = $request->input('nome');
    $idade = $request->input('idade');
    return 'Meu nome é ' . $nome . ' tenho ' . $idade . ' anos de idade';
});


Route::get('nome/nascimento/cidade', function (Request $request) {
    $nome = $request->input('nome');
    $nascimento = $request->input('nascimento');
    $cidade = $request->input('cidade');
    return 'Meu nome é ' . $nome . ' nasci no ano de ' . $nascimento . ' na cidade de  ' . $cidade;
});


Route::get('somar', function (Request $request) {
    $primeiraEntrada = $request->input('primeiro numero');
    $segundaEntrada = $request->input('segundo numero');
    $soma = ($primeiraEntrada + $segundaEntrada);
    return $soma;
});


Route::get('subtrair', function (Request $request) {
    $primeiraEntrada = $request->input('primeiro numero');
    $segundaEntrada = $request->input('segundo numero');
    $terceiraEntrada = $request->input('terceiro numero');
    $subtração = ($primeiraEntrada - $segundaEntrada - $terceiraEntrada);
    return $subtração;
});


Route::get('divisao', function (Request $request) {
    $primeiraEntrada = $request->input('primeiro numero');
    $segundaEntrada = $request->input('segundo numero');
    $resultado = $primeiraEntrada / $segundaEntrada;
    return $resultado;
});



Route::get('multiplicar', function (Request $request) {
    $primeiraEntrada = $request->input('primeiro numero');
    $segundaEntrada = $request->input('segundo numero');
    $resultado = $primeiraEntrada * $segundaEntrada;
    return $resultado;
});


Route::get('média', function (Request $request) {
    $primeiraEntrada = $request->input('primeira nota');
    $segundaEntrada = $request->input('segunda nota');
    $terceiraEntrada = $request->input('terceira nota');
    $quartaEntrada = $request->input('quarta nota');
    $quintaEntrada = $request->input('quinta nota');
    $media = ($primeiraEntrada + $segundaEntrada + $terceiraEntrada + $quartaEntrada + $quintaEntrada) / 5;
    return $media;
});


Route::get('divisao 2', function (Request $request) {
    $primeiraEntrada = $request->input('primeiro numero');
    $segundaEntrada = $request->input('segundo numero');
    $resultado = $segundaEntrada / $primeiraEntrada;
    return $resultado;
});


Route::get('dobro', function (Request $request) {
    $numero = $request->input('numero');
    $resultado = $numero * 2;
    return 'O dobro do numero ' . $numero . ' e igual a ' . $resultado;
});


Route::get('area', function (Request $request) {
    $lado1 = $request->input('primeiro lado');
    $lado2 = $request->input('segundo lado');
    $resultado = $lado1 * $lado2;
    return $resultado;
});


Route::get('desconto', function (Request $request) {
    $valorProduto = $request->input('preço');
    $descontoDesejado = $request->input('desconto desejado');
    $desconto = ($valorProduto * $descontoDesejado) / 100;
    $resultado = $valorProduto - $desconto;
    return $resultado;
});


Route::get('salario', function (Request $request) {
    $primeiroSalario = $request->input('salario anterior');
    $percentualAumento = $request->input('percentual de aumento');
    $aumento = ($primeiroSalario * $percentualAumento) / 100;
    $salarioAtual = $primeiroSalario + $aumento;
    return 'Salário anterior: ' . $primeiroSalario . ', Percentual de aumento:' . $percentualAumento . ', Salario atual:' . $salarioAtual;
});



Route::get('recompensa', function (Request $request) {
    $valorCompra = $request->input('valorCompra');
    $pontosRecompensa = $valorCompra / 10;
    return 'Pontos de recompensa: ' . $pontosRecompensa;
});



Route::get('comissao', function (Request $request) {
    $totalVendas = $request->input('totalVendas');
    $comissaoPercentual = ($totalVendas * 5) / 100;
    return $comissaoPercentual;
});



Route::get('dias', function (Request $request) {
    $numeroDias = $request->input('numeroDias');
    $totalHoras = 24 * $numeroDias;
    $totalMinutos = (60 * 24) * $numeroDias;
    $totalSegundos = (60 * 60) * $numeroDias;
    return 'O total de horas é ' . $totalHoras . ', O total de minutos é: ' . $totalMinutos . " e o de segundos é :" . $totalSegundos;
});


Route::get('Compra', function (Request $request) {
    $produtoPreço = $request->input('produtoPreço');
    $produtoQuantidade = $request->input('produtoQuantidade');
    $valorTotal = $produtoPreço * $produtoQuantidade;
    return $valorTotal;
});









Route::get('verifica/idade', function(Request $request){
$idade = $request->input('idade');

if($idade >= 18){
    return "maior de idade";
}else {
    return "menor de idade";
}

});


Route::get('verificar/par', function(Request $request){
$numero = $request->input('numero');
if($numero % 2 == 0){
    return "par" ;
} else {
    return "impar";
}
});


Route::get('IN', function(Request $request){
$numero = $request->input('numero');
if($numero > 10){
    return  'O número ' .  $numero . ' é maior que 10';
}else {
    return 'O número ' . $numero . ' não é maior que 10';
}


});

Route::get('exercicio2', function(Request $request){
    $temperatura = $request->input('temperatura');
    if($temperatura >= 30){
        return 'Está quente !';
    }else {
        return 'Está fazendo ' . $temperatura . ' graus';
    }
});

Route::get('exercicio3', function(Request $request){
$numero = $request->input('numero');
if($numero > 0){
    return 'O número ' . $numero . ' é positivo';
}
if($numero < 0){
    return 'O número ' . $numero . ' é negativo';
}
if($numero == 0){
    return 'O número é igual á zero';
}
});

Route::get('exercicio4', function(Request $request){
$numero1 = $request->input('primeiroNumero');
$numero2 = $request->input('segundoNumero');
if($numero1 > $numero2){
    return 'O maior número é ' .  $numero1;
}
if($numero2 > $numero1){
    return  'O maior numero é '  . $numero2;
}

});


Route::get('exercicio5', function(Request $request){
    $numero = $request->input('numero');
    if($numero % 3 > 0){
        return 'O número ' . $numero .  ' não é divisível por 3';
    }else {
        return 'O número ' . $numero . ' é divisível por 3';
    }
});


Route::get('exercicio1', function(Request $request){
$numero = $request->input('numero');
if($numero > 10){
    return 'O número ' . $numero . ' é maior que 10';
}else { 
    return 'O número ' . $numero . ' não é maior que 10';
}
});



Route::get('exercicio2', function(Request $request){
    $numero = $request->input('numero');
    if($numero > 0){
        return 'O número ' . $numero . ' é positivo';
    }
    if($numero < 0){
        return 'O número ' . $numero . ' é negativo';
    }
    if($numero == 0){
        return 'O número é igual á zero';
    }
    });



    Route::get('exercicio3', function(Request $request){
        $idade = $request->input('idade');
        
        if($idade >= 18){
            return "Você é maior de idade";
        }else {
            return "Você é menor de idade";
        }
        
        });

        Route::get('exercicio4', function(Request $request){
            $numero = $request->input('numero');
            if($numero % 2 == 0){
                return 'O número ' . $numero . ' é par';
            } else{
                return 'O número ' . $numero . ' é impar';
            }
        });


        Route::get('exercicio05',function(Request $request){
            $primeiroNumero = $request->input('primeiroNumero');
            $segundoNumero = $request->input('segundoNumero');
            if($primeiroNumero > $segundoNumero){
                return 'O número ' . $primeiroNumero . ' é o maior número';
            } else {
                return 'O número ' . $segundoNumero . ' é o maior número';
            }
        });


        Route::get('exercicio06', function(Request $request){
            $numero = $request->input('numero');
            if ($numero % 9 == 0){
                return ' O número ' . $numero . ' é divisível por 9';
            }  else {
                return 'O número ' . $numero . ' não é divisível por 9';
            }
        });


        Route::get('exercicio07', function(Request $request){
            $temperatura = $request->input('temperatura');
            if ($temperatura >= 30){
                return 'Está quente!' . ', fazendo ' . $temperatura . '°C';
            } else {
                return 'A temperatura é de ' . $temperatura . '°C';
            }
        });


        Route::get('exercicio08', function(Request $request){
            $numero = $request->input('numero');
            if($numero % 7 == 0){
                return 'O número ' . $numero . ' é divisível por 7';
            }else{ return 'O número ' . $numero . ' não é dividível por 7';
            }

        }); 

        Route::get('exercicio09', function(Request $request){
            $idade = $request->input('idade');
            
            if($idade <= 12){
                return "Você é uma criança";
            }else {
                return "Você não é uma criança";
            }
            
            });

            Route::get('exercicio10', function(Request $request){
                $numero = $request->input('numero');
                if($numero > 0 && $numero % 2 != 0){return 
                'O número ' . $numero . ' é positivo e ímpar';
            }else{return 'O número ' . $numero . ' não é positivo e impar';
            }
        });

            Route::get('exercicio11', function(Request $request){
                $numero = $request->input('numero');
                if($numero > 100){
                    return 'O número ' . $numero . ' é maior que 100';
                } if($numero < 100){
                    return 'O número  ' . $numero . ' é menor que 100';
                }else{ return ' O número ' . $numero . ' é igual a 100';
                }
                    
                 });


                 Route::get('exercicio12', function(Request $request){
                    $numero = $request->input('numero');
                    if($numero % 6 == 0){ 
                        return 'O número é divisível por 6';
                    }else{
                        return 'O número não é divisível por 6';
                    }
                 });

                 Route::get('exercicio13', function(Request $request){
                  $nome = $request->input('nome');
                if($nome == 'Alice'){ 
                    return 'Olá Alice !';
                }else {
                    return $nome;
                }
        
                
                  
                 });

                 Route::get('exercicio14', function(Request $request){
                $idade = $request->input('idade');
                $carteira = $request->input('carteira');
                if($idade >= 18 ){ 
                    if($carteira == 'sim'){
                        return 'Você pode dirigir';
                    } 
                }else{ 
                    return 'Você não pode dirigir';
                }
            
                 });

                 
                 
                 Route::get('exercicio15', function(Request $request){
                    $primeiroNumero = $request->input('primeiroNumero');
                    $segundoNumero = $request->input('segundoNumero');
                    if($primeiroNumero < $segundoNumero){
                        return $primeiroNumero . ' é o menor número';
                    }else{ 
                        return $segundoNumero . ' é o menor número';
                    }
                 });



                 Route::get('exercicio16', function(Request $request){
                  $nome = $request->input('nome');
                  $idade = $request->input('idade');
                  if($idade >= 18){
                    return 'Você é maior de idade, ' . $nome . '!';
                  }else{
                    return 'Você é menor de idade, ' . $nome;
                  }
                  });



                  Route::get('exercicio17',function(Request $request){
                    $primeiroNumero = $request->input('primeiroNumero');
                    $segundoNumero = $request->input('segundoNumero');
                    if($primeiroNumero == 0){
                        return 'Nâo é possível efetuar a divisão, pois o primeiro número é 0';
                    }else if($segundoNumero == 0){
                        return 'Não é possível efetuar a divisão,pois o segundo número é 0';
                    } else{;
                        return($primeiroNumero / $segundoNumero );
                    }
                    });


                    Route::get('exercicio18', function(Request $request){
                        $primeiroNumero = $request->input('primeiroNumero');
                        $segundoNumero = $request->input('segundoNumero');
                        if($primeiroNumero / $segundoNumero >100){
                            return 'O resultado da divisão é maior que 100';
                        }else{
                            return 'O resultado da divisão é menor que 100';
                        }
                    });

                    Route::get('exercicio19', function(Request $request){
                        $primeiroNumero = $request->input('primeiroNumero');
                        $segundoNumero = $request->input('segundoNumero');
                        $soma = $primeiroNumero + $segundoNumero;
                            if($soma % 100 == 0){
                                return   $primeiroNumero * $segundoNumero;
                            } else{
                                return   $primeiroNumero / $segundoNumero ;
                            }
                            
                        });

                      
                      
                        Route::get('questao1',function(Request $request){
                            $nota1 = $request->input('nota1');
                            $nota2 = $request->input('nota2');
                            $nota3 = $request->input('nota3');
                            $média = $nota1 + $nota2 + $nota3 /3;
                            if($média >= 7){
                                return 'Você foi aprovado(a), parabéns!';
                            }else{
                                return 'Você não foi aprovado(a), sinto muito!';
                            }
                        });


                            
                        Route::get('questao2', function(Request $request){
                            $renda = $request->input('renda');
                            if($renda == 1900){
                                return 'Isento de imposto';
                            } if($renda <= 2800){
                                return 'Sua alíquota é de ' . $renda * 100/ 7  ;
                            } if($renda <=3700){
                                return 'Sua alíquota é de ' . $renda * 100/ 15  ;
                            }if($renda >=3700){
                                return 'Sua alíquota é de ' . $renda * 100 /22  ;
                            }
                        });

                        
                        
                        
                         Route::get('questao3', function(Request $request){
                            $ano = $request->input('ano');
                            if($ano % 4 ==0){
                                return 'O ano de ' . $ano . ' é bissexto';
                            }else{
                                return 'O ano de ' . $ano . ' não é bissexto';
                            }
                        });


                        

                       
