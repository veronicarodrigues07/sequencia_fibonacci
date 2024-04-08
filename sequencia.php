<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci</title>
</head>
<body>
    <h1>Sequência de Fibonacci</h1>

    <form method="POST">
        <label for="num">Quantidade de números:</label>
        <input type="number" id="num" name="num">
        <button type="submit">Gerar</button>
    </form>

    <?php
    function fibonacci($n) {
        $fib = array(0, 1);
        for ($i = 2; $i < $n; $i++) {
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        }
        return $fib;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];
        if ($num <= 0) {
            echo "<p>Por favor, insira um número positivo maior que zero.</p>";
        } else {
            $fibonacci_sequence = fibonacci($num);
            echo "<p>Os primeiros $num números da sequência de Fibonacci são:</p>";
            echo "<ul>";
            foreach ($fibonacci_sequence as $fib_num) {
                echo "<li>$fib_num</li>";
            }
            echo "</ul>";
        }
    }
    ?>

</body>
</html>
