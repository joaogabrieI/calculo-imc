<?php
$nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
$idade = $_POST["idade"];
$peso = str_replace(',', '.', $_POST["peso"]); //O str_replace é usado para trocar as ocorrências de virgulas por pontos.
$altura = str_replace(',', '.', $_POST["altura"]);

function calculoIMC($altura, $peso): float // função que calcula o imc do usuário
{
    global $imc; // variável definida como global para ser usada fora do escopo da função
    $conta1 = $altura * $altura;
    $conta2 = $peso / $conta1;

    $imc = number_format($conta2, 2);
    return $imc;
}

function faixaIMC($imc) // função que define a faixa de imc do usuário
{
    switch ($imc) {
        case ($imc < 18.5):
            echo "Abaixo do Peso.";
            break;
        case ($imc <= 24.9):
            echo "Peso Normal.";
            break;
        case ($imc <= 29.9):
            echo "Sobrepeso.";
            break;
        case ($imc <= 34.9):
            echo "Obesidade Grau 1";
            break;
        case ($imc <= 39.9):
            echo "Obesidade Grau 2";
            break;
        case ($imc >= 40):
            echo "Obesidade Grau 3";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Resultado</h1>

        <p><b>Nome: <?php echo $nome ?></b></p>
        <p><b>Idade: <?php echo $idade ?></b></p>
        <p><b>Peso: <?php echo $peso ?></b></p>
        <p><b>Altura: <?php echo $altura ?></b></p>
        <p><b>IMC: <?php echo calculoIMC($altura, $peso) ?></b></p>
        <p><b>Faixa de IMC: <?php echo faixaIMC($imc) ?></b></p>

    </div>
</body>

</html>