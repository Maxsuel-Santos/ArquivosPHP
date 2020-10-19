<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 10 - POO</title>
    </head>
    <body> <pre>
            <?php
                require_once 'Pessoa.php';
                require_once 'Livro.php';

                $p[0] = new Pessoa("Maxsuel", 15, "Masculino");
                $p[1] = new Pessoa("Andreza", 20, "Feminino");

                $l[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
                $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);
                $l[2] = new Livro("PHP Avançado", "Ana Paula", 800, $p[1]);

                $l[0]->abrir();
                $l[0]->folhear(80);
                $l[0]->avancarPag();
                $l[0]->detalhes();

                print("<hr>");   // linha Horizontal.

                $l[1]->detalhes();
            ?>
    </pre> </body>
</html>
