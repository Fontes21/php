<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="">
<label>Insira o valor em dólar que será convertido: </label> 
<input type="text" name="Dolar" placeholder="Valor em dólar">
<input type="submit" value="Converter">
</form>

<?php
if (isset($_GET["Dolar"]))
{
$dolar = $_GET["Dolar"];
$real  = 5.2;
echo $dolar * $real;
}
?>

<form action="">
<label> peso: </label> 
<input type="text" name="peso" placeholder="Peso em kg">
<label>altura: </label>
<input type="text" name="altura" placeholder="Valor da Altura">
<input type="submit" value="calcular">
</form>

<?php
    
    $altura = $_GET['altura'];
    $sexo = $_GET['sexo'];

    if ($sexo === 'M') {
        $pesoIdeal = (72.7 * $altura) - 58;
    } elseif ($sexo === 'F') {
        $pesoIdeal = (62.1 * $altura) - 44.7;
    } else {
        echo "Sexo inválido";
        exit;
    }
    echo "O peso ideal é: " . $pesoIdeal . " kg";
    ?>


</body>
</html>