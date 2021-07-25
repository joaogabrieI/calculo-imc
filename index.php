<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo-IMC</title>
</head>

<body>
    <h1>Calculo IMC</h1>
    <div class="container">
        <!-- Form que envia uma requisição POST -->
        <form method="POST" action="resultado.php" class="format">
            <label>Nome: </label>
            <input type="text" name="nome" required="text" maxlength="12">

            <br>

            <label>Idade: </label>
            <input type="text" name="idade" required="number" maxlength="2">

            <br>

            <label>Peso: </label>
            <!-- O incremento STEP permite que o usuário possa apenas digitar números com duas casas decimais-->
            <input type="number" name="peso" step=".01" placeholder="Ex: 69,2" required="1">

            <br>

            <label>Altura: </label>
            <input type="number" name="altura" step=".01" placeholder="Ex: 1,85" required="1">

            <br>

            <a href="resultado.php"><input type="submit" value="Enviar" class="button-send"></a>        
            <input type="reset" value="Limpar" class="button-clear">
        </form>
    </div>
</body>

</html>