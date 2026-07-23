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

function analisarProdutos($texto,$pesquisa){

    $lista = explode(",",$texto);

    $produtos = [];

    foreach($lista as $item){

        $dados = explode(":",$item);

        $produtos[trim($dados[0])] = floatval($dados[1]);

    }

    $maisCaro = array_keys($produtos,max($produtos))[0];
    $maisBarato = array_keys($produtos,min($produtos))[0];

    $media = array_sum($produtos)/count($produtos);

    if(isset($produtos[$pesquisa])){

        $resultado = "Encontrado - R$ ".$produtos[$pesquisa];

    }else{

        $resultado = "Produto não encontrado.";

    }

    return "Mais caro: ".$maisCaro.
    "<br>Mais barato: ".$maisBarato.
    "<br>Média: ".number_format($media,2,",",".").
    "<br>Pesquisa: ".$resultado;

}

function criptografarMensagem($texto){

    return str_rot13($texto);

}

function descriptografarMensagem($texto){

    return str_rot13($texto);

}

function estatisticasNumericas($texto){

    $vetor = explode(",",$texto);

    sort($vetor);

    $soma = array_sum($vetor);

    $media = $soma/count($vetor);

    $maior = max($vetor);

    $menor = min($vetor);

    $mediana = $vetor[floor(count($vetor)/2)];

    $pares = 0;
    $impares = 0;

    foreach($vetor as $numero){

        if($numero % 2 == 0){

            $pares++;

        }else{

            $impares++;

        }

    }

    return "Soma: ".$soma.
    "<br>Média: ".number_format($media,2,",",".").
    "<br>Maior: ".$maior.
    "<br>Menor: ".$menor.
    "<br>Mediana: ".$mediana.
    "<br>Pares: ".$pares.
    "<br>Ímpares: ".$impares;

}

function calcularIMC($peso,$altura){

    return $peso / ($altura * $altura);

}

function validarEmail($email){

    if(filter_var($email,FILTER_VALIDATE_EMAIL)){

        return "E-mail válido";

    }

    return "E-mail inválido";

}

function contarVogais($texto){

    $contador = 0;

    $vogais = "aeiouAEIOU";

    for($i = 0; $i < strlen($texto); $i++){

        if(strpos($vogais,$texto[$i]) !== false){

            $contador++;

        }

    }

    return $contador;

}

function gerarSaudacao(){

    $hora = date("H");

    if($hora < 12){

        return "Bom dia";

    }

    if($hora < 18){

        return "Boa tarde";

    }

    return "Boa noite";

}
"""




