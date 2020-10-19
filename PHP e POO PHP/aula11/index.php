<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <style>
        .botao {
            background-color: blue;
            text-align: center;
            color: white;
            height: 32px;
            width: 58px;
            cursor: pointer;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $c = 0;
            while ($c <= 10) {
                echo "$c ... ";
                $c++;
            }

            /*
            $t = 10;
            while ($t >= 10) {
                echo "$t ... ";
                $t--;
            }
            */
        echo "<br>";
            $c = 0;
            while ($c <= 10) {
                echo "$c ... ";
                $c+=2; // c = c+2;
            }
        ?>

        <form action="index.php" method="get">
            <br>
            <?php
                $c = 1;
                while ($c <= 5) {
                echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'><br>";
                $c++;
                }
            ?>
            <input type='submit' class="botao" value='Enviar'>
        </form>

    
        <?php
        /*
            $i = 1;
            while ($i <= 5) {
                $v = "num".$i;
                $url = "v".$i;
                $$v = isset($_GET[$url])?$_GET[$url]:0;
                $i++;

            echo "$num1 $num2 $num3 $num4 $num5";
            
            $i = 1;
                while ($i <= 5) {
                    $v = "num".$i;
                    echo "Valor $i : ". $$v . "<br>";
                    $i--;
                }
            }
                */
        ?>

        <h2><strong>----------------------------------------------------------</strong></h2>
    
        <form action="index.php" method="get">
            <p>
                Início: <input type="number" name="inicio"><br>
                Final:  <input type="number" name="final"><br>
                Incremento: <input type="number" name="incremento"><br>
                <input type="submit" value="Pronto">
            </p>
        </form>
        <?php
            $valor1 = isset($_GET["inicio"])?$_GET["inicio"]:0; 
            $valor2 = isset($_GET["final"])?$_GET["final"]:0;
            $valor3 = isset($_GET["incremento"])?$_GET["incremento"]:0;

            if ($valor1 < $valor2) {
                $op = 1;
            } else if ($valor1 > $valor2) {
                $op = 2;
            } else if ($valor1 == $valor2) {
                $op = 3;
            }

            switch ($op) {
                case 1:
                    while ($valor1 <= $valor2 ) {
                        echo "$valor1 ";
                        $valor1 += $valor3;
                    }
                    break;
                case 2:
                    while ($valor1 >= $valor2) {
                        echo "$valor1 ";
                        $valor1 -= $valor3;
                    }
                    break;
                case 3:
                    echo "Não foi possível efetuar o contador pois os valores são iguais";
                    break;
            }
        ?>
    </div>
</body>
</html>
