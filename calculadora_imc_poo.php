<?php 

$name = "Pedriscos";
$pedroPeso = "68";
$pedroAltura = "1.76";

function calcularIMC($pedroPeso, $pedroAltura) {
    return number_format($pedroPeso/($pedroAltura*$pedroAltura), 2, ',', '.');
}
$pedroIMC = calcularIMC(68, 1.76);

echo "O IMC de $name é $pedroIMC. <br>";

?>
<html>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora IMC</title>
        <style>
            body{
                background-image: url("backgroundkk.webp");
                background-repeat: no-repeat;
                background-size: cover;
                height: 100vh;
                text-align: center;
            }
        </style>
    </head>
    <body>
        
    </body>
    </html>
</html>