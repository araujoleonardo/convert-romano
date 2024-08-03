<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Números Romanos</title>
</head>
<body>
    <h1>Conversor Inteiro para Romanos</h1>

    <form method="POST" action="">
        <label for="number">Digite um número inteiro:</label>
        <input type="number" id="number" name="number" min="1" required>
        <button type="submit">Converter</button>
    </form>

    <?php
        include 'intConverter.php';

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $numero = intval($_POST["number"]);
            if ($numero > 0) {
                $converter = new intConverter();
                $resultado = $converter->intToRoman($numero);
                echo "<p>O número $numero em algarismos romanos é: $resultado</p>";
            } else {
                echo "<p>Por favor, insira um número válido.</p>";
            }
        }

    ?>

    <br>
    <br>
    <br>
    <a href="page.php" >Algoritmo 2 > </a>
</body>
</html>
