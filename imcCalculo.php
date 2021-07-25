<?php

//$nome = $_POST["nome"];
//$idade = $_POST["idade"];
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

echo calculoIMC($altura, $peso);
echo faixaIMC($imc);
