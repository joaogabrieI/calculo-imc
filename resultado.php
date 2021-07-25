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

function faixaIMC($imc)// função que define a faixa de imc do usuário
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

function exibe($nome, $peso, $idade, $altura) // função que exibe os resultados digitados pelo usuário
{
    global $html, $imc;
    $html .= "<!DOCTYPE html>
                <html lang='pt-br'>
                <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Resultado - IMC</title>
            </head>

            <body>
            <h1>Resultado</h1>
            <div class='container'>
                <!-- Declaração de variáveis e output dos dados registrados pelo usuário. -->
                <p><b>Seu nome: ";
                echo $nome;
                $html .= "</b></p>
                <p><b>Sua Idade: ";
                echo $idade;
                $html .= "</b></p>
                <p><b>Seu peso:  ";
                echo $peso;
                $html .= "</b></p>
                <p><b>Sua Altura: ";
                echo $altura;
                $html .= "</b></p>
                <p><b>Seu IMC: ";
                echo $imc;
                $html .= "</b>
                <p><b>Faixa do IMC: ";
                echo faixaIMC($imc);
                $html .= "</b></p>
            <form action='index.html'>
                <input type='submit' value='Retornar' class='button-return'>
            </form>     
        </div>
    </body>
</html>";

    return $html;
}

echo exibe($nome, $peso, $idade, $altura);