<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <title>Resultado - IMC</title>
</head>
<body>
<h1>Resultado</h1>
<img src="img/img-fundo.jpeg" width="100%" height="555px">
    <div class="container">
    <!-- Declaração de variáveis e output dos dados registrados pelo usuário. -->
        <p><b>Seu nome: </b><?php $nome = $_POST["nome"];
        echo $nome; ?></p>

        <p><b>Sua Idade: </b><?php $idade = $_POST["idade"]; 
        echo $idade . " anos"; ?></p>

        <!-- O str_replace é usado para trocar as ocorrências de virgulas por pontos. -->
        <p><b>Seu peso: </b><?php $peso = $_POST["peso"]; $peso = str_replace(',', '.', $peso);
        echo $peso . "kg"; ?></p>

        <p><b>Sua Altura: </b><?php $altura = $_POST["altura"]; $altura = str_replace(',', '.', $altura);
        echo $altura . "m";?></p>

    <!-- Variáveis de calculo do imc, com a utilização do number_format o resultado do imc será representado apenas com duas casas decimais. -->
        <p><b>Seu IMC: </b><?php  $conta1 = $altura * $altura; 
        // Forma que eu encontrei de fazer o programa encerrar quase o valor inserido pelo usuário seja 0.
            if($conta1 == 0){ 
                exit("Não é possivel realizar a operação com o número 0.");
            };
        $conta2 = $peso / $conta1; 
        $imc = number_format($conta2, 2); 
        echo $imc;?></p>
    <!-- Condicionais que definem a Faixa de IMC do usuário. -->
        <p><b>Faixa do IMC: </b> <?php 
        if($imc < 18.5){
            echo "Abaixo do peso";
        }elseif($imc <= 24.9){
            echo "Peso Normal";
        }elseif($imc <= 29.9){
            echo "Sobrepeso";
        }elseif($imc <= 34.9){
            echo "Obesidade Grau 1";
        }elseif($imc <= 39.9){
            echo "Obesidade Grau 2";
        }elseif($imc >= 40){
            echo "Obesidade Grau 3";
        }elseif($imc == 0){echo "valor ínvalido.";};?></p>

        <form action="index.html">
            <input type="submit" value="Retornar" class="button-return">
        </form>

        <p>João Gabriel do Nascimento
            RM: 14789
        </p>
        
    </div>
</body>
</html>