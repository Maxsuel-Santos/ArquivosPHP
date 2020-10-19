<!DOCTYPE html>
<html lang="pt-BR" translate="no"> 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 13 - POO</title>
    </head>
    <body> <pre> <h2>
            <?php
                require_once 'Animal.php';
                require_once 'Cachorro.php';
                require_once 'Lobo.php';

                $c = new Cachorro();
                $c->reagirFrase("Olá");
                $c->reagirFrase("Vai apanhar seu dog mal");
                $c->reagirHora(11, 45);
                $c->reagirHora(21, 00);
                $c->reagirDono(true);
                $c->reagirDono(false);
                $c->reagirIdadePeso(2, 9.5);
                $c->reagirIdadePeso(17, 4.5);
            ?>
    </pre> </body>
</html>
