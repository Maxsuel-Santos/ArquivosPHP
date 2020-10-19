<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 04 - POO</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Caneta.php';
                $c1 = new Caneta("BIC","BLUE",0.5);   // OS valores passados como parâmetros p/ a classe Caneta() são do método construtor.
                $c2 = new Caneta("Titanic", "RED", 1.0);
                /*
                $c1->setModelo("Bic Cristal");
                $c1->setPonta(0.5);
                
                print "Eu tenho uma caneta da {$c1->getModelo()} de ponta {$c1->getPonta()}";
                */
               print_r($c1);
               echo "<br/><br/>";
               print_r($c2);
            ?>
        </pre>
    </body>
</html>
