<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <style>
        h2 {
            font: bold 15pt Arial;
            color: red;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $num1 = 3;
            $num2 = 2;
            echo "<br>A soma vale ".($num1+$num2);
            echo "<br>A subtração vale ".($num1-$num2);
            echo "<br>A divisão vale ".($num1/$num2);
            echo "<br>A multiplicação vale ".($num1*$num2);
            echo "<br>O resto da divisão interia vale ".($num1%$num2);
            

            $n1 = $_GET["a"];  // http://localhost/aula05/index.php?a=7&b=9
            $n2 = $_GET["b"];
            echo "<br><br><h2>Valores recebidos: $n1 & $n2</h2>";
            echo "<br><br>A soma dos parâmentros da URL foi: ".($n1+$n2);  
            echo "<br>O valor absoluto de $n2 é: ".abs($n2);
            echo "<br>$n1<sup>$n1</sup> é igual à: ".pow($n1, $n2);
            echo "<br>A raíz quadrada de $n1 é ".sqrt($n1);
            echo "<br>O valor arrendondado de $n2 é ". round($n2);
            echo "<br>$n2 em moeda: R$ ". number_format($n2, 2, ",", ".");
        ?>
    </div>
</body>
</html>
