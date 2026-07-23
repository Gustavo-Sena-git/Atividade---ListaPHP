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

function ordenarNomes($nomes){

    $vetor = explode(",", $nomes);

    foreach($vetor as $indice => $nome){

        $vetor[$indice] = trim($nome);

    }

    sort($vetor);

    return implode(", ", $vetor);

}

function analisarNumero($numero){

    if($numero % 2 == 0){
        $paridade = "Par";
    }else{
        $paridade = "Ímpar";
    }

    $primo = true;

    if($numero < 2){
        $primo = false;
    }else{

        for($i = 2; $i < $numero; $i++){

            if($numero % $i == 0){
                $primo = false;
                break;
            }
        }
    }
    $soma = 0;

    for($i = 1; $i < $numero; $i++){

        if($numero % $i == 0){

            $soma += $i;
        }
    }
    if($soma == $numero){
        $perfeito = "Sim";
    }else{
        $perfeito = "Não";
    }
    return "Paridade: ".$paridade.
           "<br>Primo: ".($primo ? "Sim" : "Não").
           "<br>Perfeito: ".$perfeito;

}

function calcularMedia($notas){

    $vetor = explode(",", $notas);

    $maior = max($vetor);
    $menor = min($vetor);

    $media = array_sum($vetor) / count($vetor);

    if($media >= 7){

        $situacao = "Aprovado";

    }elseif($media >= 5){

        $situacao = "Recuperação";

    }else{

        $situacao = "Reprovado";

    }

    return "Maior nota: ".$maior.
           "<br>Menor nota: ".$menor.
           "<br>Média: ".number_format($media,2,",",".").
           "<br>Situação: ".$situacao;

}

function formatarTexto($texto){

    $maiusculas = strtoupper($texto);

    $minusculas = strtolower($texto);

    $primeiraMaiuscula = ucwords(strtolower($texto));

    $quantidade = strlen($texto);

    return "Texto em maiúsculas: ".$maiusculas.
           "<br><br>Texto em minúsculas: ".$minusculas.
           "<br><br>Primeira letra de cada palavra: ".$primeiraMaiuscula.
           "<br><br>Quantidade de caracteres: ".$quantidade;

}
"""




