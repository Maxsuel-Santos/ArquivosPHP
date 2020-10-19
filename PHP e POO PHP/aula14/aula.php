<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $a = isset($_GET["num1"])?$_GET["num1"]:1;
            $b = isset($_GET["num2"])?$_GET["num2"]:1;
            function soma($a,$b) {
                $s = $a+$b;
                print "Soma: $s";
                // return "Soma: $s";        
                // printf("Soma: $s");
            }
            soma($a, $b);


            function somas() {
                $p = func_get_args();
                $t = func_num_args();
                $s = 0;
                for ($i=0; $i < $t; $i++) { 
                    $s += $p[$i];
                }
                echo "<br><br>Nada a ver: $s";
            }
            $r = somas(3, 5, 2, 7);
        ?>
        <br><br><br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>
