<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <style>
        .result {
            font: bolder 13pt Arial;
            color: red;
            text-decoration: underline;
        }
        .resul {
            font: bolder 13pt Arial;
            color: green;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div>
        <?php
            for ($i = 1; $i <= 10 ; $i++) { 
                echo "$i ";
            }
            
            echo "<br/>";
            
            for ($c = 10;$c >= 1;$c--) {
                echo "$c ";
            }

            echo "<br/><br/>";

            for ($i=0;$i<=1000;$i+=10) {  // P/ o código ficar mais "CORRETO", etilize espacos dentro do FOR.
                echo "$i ";
            }

            echo "<br/><br/>";

            for ($c=20;$c>=0;$c-=2) {
                print "$c ";
            }
        ?>
<br/><br/>
            <form action="index.php" method="get">
                <select name="num_da_tabu">
                    <?php
                        for ($option=0;$option<=1000;$option++) {
                            echo "<option>$option</option>";
                        }
                    ?>
                </select>
                <input type="submit" value="Tabuada">
            </form>
<br>
            <?php
                $num = isset($_GET["num_da_tabu"])?$_GET["num_da_tabu"]:0;
                for ($cont = 0;$cont <= 10;$cont++) { 
                    $result = $num * $cont;
                    echo "$num x $cont = $result <br/>";
                }
            ?>
<br><br>
            <form action="index.php" method="get">
                <p>
                    Número: <input type="number" name="num">
                            <input type="submit" value="Resultado">
                </p>
            </form>
            <?php
                 $c=1;
                 $div=0;
                 $n=isset($_GET["num"])?$_GET["num"]:0;
         
                 echo "<h2>Analisando o número <span>$n</span></h2></br>";
                 echo "O número $n é múltiplo de: ";
                 for ($c=1;$c<=$n;$c++){
                     $mod=$n%$c;
                     if ($mod==0 && $c>=1){
                         echo "<span>$c</span> ";
                         $div++;
                     }
                 }
                 
                 echo "</br>O número $n possui <span>$div</span> divisores.";
                 if($div==2){
                     echo "</br>$n <span>É NÚMERO PRIMO</span>.";
                 }
                 else{
                     echo "</br>$n <span>NÃO É NÚMERO PRIMO</span>.";
                 }
             ?>
             </br></br>
    </div>
</body>
</html>
