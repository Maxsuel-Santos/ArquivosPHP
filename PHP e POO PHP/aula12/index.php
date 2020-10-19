<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $c = 1;
            do {
                echo "$c ";
                $c++;
            } while ($c <= 10);
        ?>
        
        <?php
            echo "<br/>";
            $cont = 50;
            do {
                echo "$cont ";
                $cont -= 2;
            } while ($cont >= 0);
        ?>

        <form method="get" action="index.php">
            <p>
                Digite um número: <input type="number" name="num" value="1">
                                  <input type="submit" value="Calcular fatorial">
            </p>
                <?php
                    $num = isset($_GET["num"])?$_GET["num"]:1; // $num = $_GET["num"];
                    $c = $num;
                    $fat = 1;
                    do {
                       $fat *= $c;
                       $c--;
                    } while ($c >= 1);
                    echo "<h2>$num != $fat</h2>"; 
                ?>

                <form action="index.php" method="get">
                    <p>
                        Número: <input type="number" name="num_tabuada" min="0" max="100" placeholder="0 a 100">
                                <input type="submit" value="Ver tabuada">
                    </p>
                </form>
                <?php
                    $tabuada = isset($_GET["num_tabuada"])?$_GET["num_tabuada"]:0; 
                    $cont = 0;
                    echo "<h2>Tabuada de $tabada</h2>";
                    do {
                        echo "$tabuada x $cont = ". ($tabuada * $cont);
                        echo "<br>";
                        $cont++;
                    } while ($cont <= 10);
                ?>
        </form>
    </div>
</body>
</html>
