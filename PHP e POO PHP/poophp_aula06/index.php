<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 06 - POO</title>
    </head>
    <body>
        <h1>Projeto Controle Remoto</h1>
            <?php
                require_once 'ControleRemoto.php';
                $c = new ControleRemoto();
                $c->ligar();          // Ligar.
                $c->maisVolume();     // Aumento de volume (de 5 em 5).
                $c->abrirMenu();      // Menu de informações.
                
            ?>
    </body>
</html>
