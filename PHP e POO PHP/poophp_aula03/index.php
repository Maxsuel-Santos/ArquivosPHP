<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 03 - POO</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Caneta.php';
                $c1 = new Caneta;
                $c1->modelo = "BIC Crystal";
                $c1->cor = "Red";
                
                // Não é possível mexer/mudar nos objetos (atributos & métodos)-
                // privados e/ou protegidos (protected and private) por enaquanto.
               
                $c1->rabiscar();
                $c1->tampar();
                 print_r($c1);
            ?>
        </pre>
    </body>
</html>
