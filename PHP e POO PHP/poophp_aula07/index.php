<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 07 - POO</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body> <pre>
        <script src="arquivo.js"></script>
            <?php
                require_once 'Lutador.php';
                $l = array();
                $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9,11, 2, 1);
                //print_r($l[0]);
                $l[0]->apresentar();
                $l[0]->ganharLuta();
                $l[0]->status();

                $l[1] = new Lutador("Putscript","Brasil", 29, 1.68, 57.8, 14, 2, 3);
                $l[1]->empatarLuta();
                $l[1]->apresentar();
                $l[1]->status();

                /*$l[2] = new Lutador();

                $l[3] = new Lutador();

                $l[4] = new Lutador();

                $l[5] = new Lutador(); */
            ?>
    </pre> </body>
</html>
