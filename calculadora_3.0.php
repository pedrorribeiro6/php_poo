<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
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
    <h3>Calculadora de IMC</h3>
    <form method="POST" action="">
        <label>Peso (kg):</label>
        <input type="number" step="0.1" name="peso" required><br><br>
        <label>Altura (m):</label>
        <input type="number" step="0.01" name="altura" required><br><br>
        <button type="submit" name="calcular" style="background-color: #064367;color:white">Calcular</button>
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        $peso = str_replace(',', '.', $_POST['peso']); // Substitui vírgula por ponto
        $altura = str_replace(',', '.', $_POST['altura']);
        
        // Validação básica para evitar divisão por zero
        if ($peso > 0 && $altura > 0) {
            // Fórmula do IMC: peso / (altura * altura)
            $imc = $peso / ($altura * $altura);
            $imcFormatado = number_format($imc, 2, ',', '');

            echo "<h4>Seu IMC é: $imcFormatado</h4>";

            // Classificação
            if ($imc < 18.5) {
                echo "Classificação: Abaixo do peso";
            } elseif ($imc >= 18.5 && $imc < 25) {
                echo "Classificação: Peso normal";
            } elseif ($imc >= 25 && $imc < 30) {
                echo "Classificação: Sobrepeso";
            } else {
                echo "Classificação: Obesidade";
            }
        } else {
            echo "Por favor, insira valores válidos.";
        }
    }
    ?>
</body>
</html>
