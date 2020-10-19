<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>aula 17</title>
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>
            <?php
                $f = "LinGUAgeM PhP";
                printf("%s & %s", strtolower($f), strtoupper($f));
                
                echo('<br><br>');
                
                $fr = "maxsuel É gostoSO";
                printf("%s", ucfirst($fr));
                
                echo('<br><br>');
                
                $fra = "Maxsuel Santos";
                printf('%s', strrev($fra));
                
                echo('<br><br>');
                
                $fras = "Estou aprendendo PHP";
                printf('%s', strpos($fras, "PHP"));
                
                echo('<br><br>');
                
                $frase = "Estou aprendendo PHP";
                printf("%s", stripos($frase, "php"));
                
                echo('<br><br>');
                
                $frases = "PHP, JS e PYTHON";
                printf('%s', substr_count($frases, 'P'));
                        
                echo('<br><br>');
                
                $site = "Curso em Vídeo";
                $sub = substr($site,0,5);
                echo "$sub ";
                
                echo('<br><br>');
                
                $nome = "Guanabara";
                $novo = str_pad($nome, 10, " ", STR_PAD_RIGHT);
                print("Meu professor $novo é lindo!");
            ?>
<br><br><br>
                        <?php
                            $input = "Alien";
                            print str_pad($input, 10,);                      // produz "Alien     " 
                            echo "<br><br>";
                            print str_pad($input, 10, "-=", STR_PAD_LEFT);  // produz "-=-=-Alien"
                            echo "<br><br>";
                            print str_pad($input, 10, "_", STR_PAD_BOTH);   // produz "__Alien___"
                            echo "<br><br>";
                            print str_pad($input, 6 , "___", STR_PAD_LEFT); // produces "_Alien"
                        ?>
<br><br>
            <?php
                $frase = "Gosto de estudar Matemática!";
                $novafrase = str_replace("Matemática", "PHP", $frase);
                print $novafrase;
            ?>
        </div>
    </body>
</html>
