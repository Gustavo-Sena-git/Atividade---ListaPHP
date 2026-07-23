<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 1</title>
</head>
<body>

    <h2>Calculadora da Engenharia</h2>

    <form method="POST">

        <label>Valor de X:</label>
        <input type="number" name="x" required>

        <br><br>

        <label>Valor de Y:</label>
        <input type="number" name="y" required>

        <br><br>

        <input type="submit" name="calcular" value="Calcular">

    </form>

    <hr>

    <?php

        require "funcoes.php";

        if(isset($_POST["calcular"])){

            $x = $_POST["x"];
            $y = $_POST["y"];

            echo calcularFormula($x,$y);

        }

    ?>

    <h2>Exercicio 2 - Espelho Magico</h2>

    <form method="POST">

        <label>Digite um texto:</label><br>

        <input type="text" name="texto2" required>

        <br><br>

        <input type="submit" name="calcularEx2" value="Inverter Texto">

    </form>

    <?php

    if(isset($_POST["calcularEx2"])){

        $texto2 = $_POST["texto2"];

        echo inverterTexto($texto2);

    }

    ?>

    <h2>Exercicio 3 - Cadastro Seguro</h2>

    <form method="POST">

        <label>Digite o CPF:</label><br>

        <input type="text" name="cpf3" required>

        <br><br>

        <input type="submit" name="calcularEx3" value="Mascarar CPF">

    </form>

    <?php

    if(isset($_POST["calcularEx3"])){

        $cpf3 = $_POST["cpf3"];

        echo mascararCpf($cpf3);

    }

    ?>

    <h2>Exercicio 4 - Gerador de Senhas</h2>

    <form method="POST">

        <label>Quantidade de caracteres:</label><br>

        <input type="number" name="tamanho4" min="1" required>

        <br><br>

        <input type="submit" name="calcularEx4" value="Gerar Senha">

    </form>

    <?php

    if(isset($_POST["calcularEx4"])){

        $tamanho4 = $_POST["tamanho4"];

        echo gerarSenha($tamanho4);

    }

    ?>

    <h2>Exercício 5 - Calculadora de Desconto</h2>

    <form method="POST">

        <label>Valor da compra:</label><br>
        <input type="number" step="0.01" name="valor5" required>

        <br><br>

        <input type="submit" name="calcularEx5" value="Calcular">

    </form>

    <?php

    if(isset($_POST["calcularEx5"])){

        $valor5 = $_POST["valor5"];

        echo calcularDesconto($valor5);

    }

    ?>

    <h2>Exercício 6 - Conversor de Temperatura</h2>

    <form method="POST">

        <label>Temperatura:</label><br>

        <input type="number" step="0.01" name="temperatura6" required>

        <br><br>

        <label>Converter para:</label>

        <select name="tipo6">

            <option value="F">Fahrenheit</option>
            <option value="C">Celsius</option>

        </select>

        <br><br>

        <input type="submit" name="calcularEx6" value="Converter">

    </form>

    <?php

    if(isset($_POST["calcularEx6"])){

        $temperatura6 = $_POST["temperatura6"];
        $tipo6 = $_POST["tipo6"];

        echo converterTemperatura($temperatura6,$tipo6);

    }

    ?>

    <h2>Exercício 7 - Classificador de Triângulos</h2>

    <form method="POST">

        <label>Lado A:</label><br>
        <input type="number" name="a7" required>

        <br><br>

        <label>Lado B:</label><br>
        <input type="number" name="b7" required>

        <br><br>

        <label>Lado C:</label><br>
        <input type="number" name="c7" required>

        <br><br>

        <input type="submit" name="calcularEx7" value="Classificar">

    </form>

    <?php

    if(isset($_POST["calcularEx7"])){

        $a7 = $_POST["a7"];
        $b7 = $_POST["b7"];
        $c7 = $_POST["c7"];

        echo classificarTriangulo($a7,$b7,$c7);

    }

    ?>

    <h2>Exercício 8 - Organizador de Lista</h2>

    <form method="POST">

        <label>Digite os nomes separados por vírgula:</label><br>

        <input type="text" name="nomes8" required>

        <br><br>

        <input type="submit" name="calcularEx8" value="Organizar">

    </form>

    <?php

    if(isset($_POST["calcularEx8"])){

        $nomes8 = $_POST["nomes8"];

        echo ordenarNomes($nomes8);

    }

    ?>

    <h2>Exercício 9 - Verificador Matemático</h2>

    <form method="POST">

        <label>Digite um número:</label><br>

        <input type="number" name="numero9" required>

        <br><br>

        <input type="submit" name="calcularEx9" value="Analisar">

    </form>

    <?php

    if(isset($_POST["calcularEx9"])){

        $numero9 = $_POST["numero9"];

        echo analisarNumero($numero9);

    }

    ?>

    <h2>Exercício 10 - Sistema de Notas</h2>

    <form method="POST">

        <label>Digite as notas separadas por vírgula:</label><br>

        <input type="text" name="notas10" required>

        <br><br>

        <input type="submit" name="calcularEx10" value="Calcular">

    </form>

    <?php

    if(isset($_POST["calcularEx10"])){

        $notas10 = $_POST["notas10"];

        echo calcularMedia($notas10);

    }

    ?>

    <h2>Exercício 11 - Formatador de Relatórios</h2>

    <form method="POST">

        <label>Digite um texto:</label><br>

        <textarea name="texto11" rows="5" cols="40" required></textarea>

        <br><br>

        <input type="submit" name="calcularEx11" value="Formatar">

    </form>

    <?php

    if(isset($_POST["calcularEx11"])){

        $texto11 = $_POST["texto11"];

        echo formatarTexto($texto11);

    }

    ?>
</body>
</html>