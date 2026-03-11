<?php 
$peso = "68";
$altura = "1.76";

$imc = number_format($peso/($altura*$altura), 2, ",", ".") ;

echo  "O IMC de Pedro é: $imc" ;
?>
<html>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calcular IMC</title>
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