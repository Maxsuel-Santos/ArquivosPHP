<!DOCTYPE html>
<html lang="pt-BR" translate="no"> 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 14 - POO</title>
    </head>
    <body> <pre> 
            <?php
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
            require_once 'Visualizacao.php';
                $v[0] = new Video("Aula 1 de POO em PHP");
                $v[1] = new Video("Aula 6 de JavaScript");
                $v[2] = new Video("Aula 17 de Python");
                
                $g[0] = new Gafanhoto("Maxsuel", 15, "Masculino", "MaxCreu");
                $g[1] = new Gafanhoto("Andreza", 20, "Feminino", "DezaCalabresa");

                $visu[0] = new Visualizacao($g[0], $v[0]);  // Maxsuel assiste aula de POO em PHP
                $visu[0]->avaliar();
                
                $visu[1] = new Visualizacao($g[1], $v[2]);
                $visu[1] = new Visualizacao($g[1], $v[1]);
                $visu[1]->avaliarPorc(90);

                print_r($visu[0]);
                echo("</br></br></br></br></br>");
                print_r($visu[1]);

            ?>
    </pre> </body>
</html>
