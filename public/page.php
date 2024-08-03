<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Números Romanos</title>
</head>
<body>
    <h1>Conversor Romanos para Inteiro</h1>

    <form method="POST" action="">
        <label for="roman">Digite um número romano:</label>
        <input type="text" id="roman" name="roman" required>
        <button type="submit">Converter</button>
    </form>

    <?php
        include 'romanoConverter.php';

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $roman = strtoupper(trim($_POST["roman"]));
            $converter = new romanoConverter();
            $resultado = $converter->romanToInt($roman);
            echo "<p>O algarismo romano $roman convertido para inteiro é: $resultado</p>";
        }

    ?>

    <br>
    <br>
    <br>
    <a href="index.php" > < Algoritmo 1</a>
</body>
</html>
