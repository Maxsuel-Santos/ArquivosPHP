<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            // Operador unário e relacionais.
            $a = $_GET["a"];
            $b = $_GET["b"];
            $maior = $a>$b?"A variável A é maior.":"A variável B é maior.";
            echo "$maior";
            
            echo "<h2>----------------------------------------</h2>";
 
            echo "<p>S para somar e M para multiplicar.</p><br>";
            $a = $_GET["a"];
            $b = $_GET["b"]; 
            $op = $_GET["op"];
            $result = $op=="S"?"A soma foi: ".($a+$b):"A multiplicação foi: ".$a*$b;
            echo "Resultado: $result<br>";
            
            echo "<h2>----------------------------------------</h2>";
            
            $x = 7;
            $y = "7"; // $y = 7;
            $r = $x==$y?"SIM":"NÃO"
                    . "das variáveis X e Y";
            echo "As variáveis X e Y, tem o mesmo valor independente de seu tipo?"
            . " $r<br><br>";
            
            $rr = $x===$y?"SIM":"NÃO "; // Idêntico.
            echo "As variáveis X e Y, tem o mesmo valor e mesmo tipo?"
            . " $rr<br>";
            
            echo "<h2>----------------------------------------</h2>";
            
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $media = ($nota1+$nota2)/2;
            echo "<br>A média foi: ". number_format($media, 2,",",".");
            $situacao = $media<6?"REPROVADO":"APROVADO";
            echo "<br/>Situação do aluno: $situacao";
            // Pode usar o operador Ternário concatenado também com o echo (sem o uso da variável $situação, porém a expressã tpda deve ficar em parênteses).
            
            echo "<h2>----------------------------------------</h2>";
            
            $ano = $_GET["ano"];
            $idade = 2020 - $ano;
            echo "Em 2020 você tem/terá se não vier a óbito $idade anos.";
            $sit = $idade>=18 && $idade < 65?"VOTO OBRIGATÓRIO!":"VOTO OPCIONAL!";
            echo "<br/>Sua situação: $sit";
       ?>
    </div>
</body>
</html>
