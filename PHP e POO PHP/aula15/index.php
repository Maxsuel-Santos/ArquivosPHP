<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 15</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            function teste(&$x) { // ...teste($x)
                $x += 2;
                print "<p>O valor de X é $x</p>";
            }
            $a = 3;
            teste($a);
            print "<p>O valor de A é $a</p>";

            include "funcoes.php"; // require "funcoes.php";
            ola();
            valor(7);
        ?>
    </div>
</body>
</html>
