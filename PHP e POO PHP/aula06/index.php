<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <style>
        body {
            font: bold 15pt Arial;
            color: black;
            text-shadow: 3px 3px 3px yellow;
            text-align: center;
            margin-top: 30px;
        }
        h2 {
            font: bold 20pt Arial;
            color: red;
            text-shadow: 2px 2px 2px yellow;
            text-align: center;
            margin-top: 50px;
        }
        strong {
            color: blue;
            text-shadow: 3px 3px 3px yellow;
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <?php
            // 10% de desconto de um valor.

            $preco = $_GET["p"];
            echo "O preço foi R$ ".number_format($preco, 2, ",", ".");
            $preco -= ($preco * 10 / 100);
            echo "<br>O desconto foi de 10%, passando à custar R$ ".number_format($preco, 2, ",", ".");
            
            echo "<h2>~=~=~=~=~=~=~=~=~=~=~=~=~=~=~=~=~=~=~=</h2>";
            
            // Ano atual e anterior.

            $atual = $_GET["aa"];
            echo "O ano atual segundo a URL é <strong>$atual</strong> e o ano anterior é ".--$atual;
            
            echo "<h2>~=~=~=~=~=~=~=~=~=~=~=~=~=~=~=~=~=~=~=</h2>";

            // Variáveis referenciadas.
            
            $a = 3;
            $b = &$a; # As variáveis $a e $b estão ligadas.
            $b += 5;
            echo "A variável <strong>A</strong> vale $a";
            echo "<br>A variável <strong>B</strong> vale $b";

            echo "<h2>~=~=~=~=~=~=~=~=~=~=~=~=~=~=~=~=~=~=~=</h2>";

            // Variáveis de variáveis (variantes).
            
            $x = "abc";
            $$x = "def"; # o $ criou uma variável chamada abc.
            echo "O conteúdo da variável X é <strong>$x</strong>";
            echo "<br>A variável criada (abc) tem o valor <strong>$abc</strong>";
        ?>
    </div>
</body>
</html>
