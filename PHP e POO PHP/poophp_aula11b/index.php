<!DOCTYPE html>
<html lang="pt-BR" translate="no">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 11b - POO</title>
    </head>
    <body> <pre>
            <?php
                require_once 'Aluno.php';
                require_once 'Bolsista.php';
                $a1 = new Aluno();
                $a1->setNome("MAX");
                $a1->setMatricula(202015210021);
                $a1->setSexo("M");
                $a1->setIdade(15);
                $a1->setCurso("Informática");
                $a1->PagarMensalidade();
                print_r($a1);


                $bo = new Bolsista();
                $bo->setNome("DEB");
                $bo->setMatricula(202017210021); 
                $bo->setBolsa(15.5);   
                $bo->setSexo("F");
                $bo->setIdade(15);
                $bo->setCurso("Informática");
                $bo->PagarMensalidade();
                print_r($bo);
            ?>
    </pre> </body>
</html>
