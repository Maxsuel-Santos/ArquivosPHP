<!DOCTYPE html>
<html lang="pt-BR" translate="no">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 11a - POO</title>
    </head>
    <body> <pre>
            <?php
                require_once 'Pessoa.php';             // Opcional essa importação.
                require_once 'Aluno.php';
                require_once 'Professor.php';
                require_once 'Funcionario.php';
                
                $p1 = new Pessoa(); 
                $p1->setNome("Maxsuel");
                $p1->setIdade(15);
                $p1->setSexo("Masculino");
                print_r($p1);

                $p2 = new Aluno();
                $p2->setNome("Andreza");
                $p2->setIdade(20);
                $p2->setSexo("Feminino");
                $p2->setMatr("Sim");
                $p2->setCurso("Farmácia");
                print_r($p2);

                $p3 = new Professor();
                $p3->setNome("Elenice");
                $p3->setIdade(38);
                $p3->setSexo("Feminino");
                $p3->setSalario("R$ 0,00");
                $p3->setEspecialidade("Dona de Casa");
                print_r($p3);

                $p4 = new Funcionario();
                $p4->setNome("Marivaldo");
                $p4->setIdade(52);
                $p4->setSexo("Masculino");
                $p4->setSetor("Salão 13");
                $p4->setTrabalhando("Sim");
                print_r($p4);
            ?>
    </pre> </body>
</html>
