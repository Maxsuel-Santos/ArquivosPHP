<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 16</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $produto = (string)"Chocolate";
            $preço = (float)5.50;
            printf("O %s custa R$ %.2f", $produto, $preço);
            
            echo '<br><br>';
            
            $v = array(3,5,7);
            print_r($v);
            
            echo '<br><br>';
            
            $txt = "Esse é um baita de um texto grande com finalidade de estudos...";
            $r = wordwrap($txt, 10, "<br>", false);
            echo $r;
            
            echo '<br><br>';
            
            $texto = "Maxsuel é gostoso!";
            echo strlen($texto);
            
            echo '<br><br>';

            $texto = "Maxsuel é gostoso!";
            echo trim($texto);  // ltrim();  &  rtrim();

            echo ('<br><br>');

            $texto = "Estou estudando PHP";
            print str_word_count($texto, 0);

            echo ('<br><br>');

            $site = "Curso em vídeo";
            $vetor = explode(" ", $site);
            print_r($vetor);

            echo ('<br><br>');

            $vetor[0] = "Curso";
            $vetor[1] = "em";
            $vetor[2] = "vídeo";
            print implode(" ", $vetor);

            echo ('<br><br>');

            $letra = ord("C");
            echo $letra;

            echo ('<br><br>');

            $letra = chr(89);
            echo $letra;
        ?>
    </div>
</body>
</html>
