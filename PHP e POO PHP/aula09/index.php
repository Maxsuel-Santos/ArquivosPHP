<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <style>
        body {
            text-align: center;
        }
        legend {
            font: bold 14pt Arial;
            text-shadow: 1px 1px 1px yellow;
        }
        fieldset {
            border: 3px solid black;
            border-radius: 15px;
        }
        strong {
            color: red;
        }
        #apro {
            color: green;
        }
        #med {
            color: blue;
        }
        #recu {
            color: yellow;
        }
    </style>
</head>
<body>
    <div>
        <form action="index.php" method="get">
            <p>
                <fieldset> <legend>Idade</legend>
                    Ano de nascimento: <input type="number" name="ano" placeholder="4 dígitos." min="1900" max="2020">
                    <input type="submit" value="Analizar">
                </fieldset>
            </p>
        </form>
            <fieldset> <legend>Resultado</legend>
                <?php
                    $a = isset($_GET["ano"])?$_GET["ano"]:1900;
                    $i = date("Y") - $a;
                    echo "<p>Você nasceu em $a e tem/terá nesse ano $i ano(s).</p>";
                    if ($i >= 18 && $i <= 65) {
                        echo "<p>Voto obrigatório!</p>";
                    } elseif ($i < 16) {
                        echo "<p>Não pode votar!</p>"; # Pode ficar dentro do else {}
                    } else {
                        echo "<p>Voto opcional!</p>";
                    }
                ?>
            </fieldset>

            <h2>--------------------------------------------------------------------------</h2>
        <form action="index.php" method="get">
            <p>
                Nota 1: <input type="number" name="n1" max="10" min="0" placeholder="N1">
                Nota 2: <input type="number" name="n2" max="10" min="0" placeholder="N2">
            </p>
                <input type="submit" value="Calcular média">

            <fieldset> <legend>Resultado final</legend>
                    <?php
                        $nota1 = $_GET["n1"];
                        $nota2 = $_GET["n2"];
                        $media = number_format(($nota1+$nota2)/2,2);
                        echo "Nota 1: <strong>$nota1</strong><br> Nota 2: <strong>$nota2</strong><br>";
                        echo "<p>A média do(a) aluno(a) foi: <strong id='med'>$media</strong></p>";

                        if ($media < 6) {
                            echo "<p>O aluno(a) está <strong>REPROVADO</strong>!</p>";
                        } elseif ($media >= 6 && $media <= 7) {
                            echo "<p>O aluno(a) está em <strong id='recu'>RECUPERAÇÃO</strong>!</p>";
                        } else {
                            echo "<p>O aluno(a) está <strong id='apro'>APROVADO</strong>!</p>";
                        }
                    ?>
            </fieldset>
        </form>
    </div>
</body>
</html>
