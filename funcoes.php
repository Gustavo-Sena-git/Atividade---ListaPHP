<?php

function calcularFormula($x,$y){

    if(($x+$y)==0){
        return "Não é possível realizar a divisão.";
    }

    $resultado = (($x*$x)+($y*$y))/($x+$y);

    return "Resultado: ".$resultado;

}

function inverterTexto($texto){

    $invertido = strrev($texto);

    $quantidade = strlen($texto);

    return "Texto invertido: ".$invertido.
           "<br>Quantidade de caracteres: ".$quantidade;

}

function mascararCpf($cpf){

    $ultimos = substr($cpf,-4);

    $mascara = str_repeat("*", strlen($cpf)-4);

    return $mascara.$ultimos;

}

function gerarSenha($tamanho){

    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    $senha = "";

    for($i = 0; $i < $tamanho; $i++){

        $indice = rand(0, strlen($caracteres)-1);

        $senha .= $caracteres[$indice];

    }

    return "Senha gerada: ".$senha;

}

function calcularDesconto($valor){

    if($valor > 100){

        $valor = $valor * 0.9;

    }

    return "Valor final: R$ ".number_format($valor,2,",",".");

}

function converterTemperatura($temperatura,$tipo){

    if($tipo == "F"){

        $resultado = ($temperatura * 9/5) + 32;

        return "Resultado: ".$resultado." °F";

    }

    $resultado = ($temperatura - 32) * 5/9;

    return "Resultado: ".$resultado." °C";

}

function classificarTriangulo($a,$b,$c){

    if($a == $b && $b == $c){

        return "Triângulo Equilátero";

    }

    if($a == $b || $a == $c || $b == $c){

        return "Triângulo Isósceles";

    }

    return "Triângulo Escaleno";

}
?>