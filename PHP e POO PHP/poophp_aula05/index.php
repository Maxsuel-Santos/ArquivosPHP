<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 05 - POO</title>
    </head>
    <body>
        <pre>
            <?php
                require_once "ContaBanco.php";
                $p1 = new ContaBanco;      // Jubileu.
                $p2 = new ContaBanco;      // Creuza.
                
                $p1->abrirConta("CC");     // Tipo da conta (conta corrente).
                $p1->setDono("Jubileu");   // Nome do dono da conta.
                $p1->setNumConta(84620);   // Nº da conta.  
                $p1->depositar(300);       // Depósito de dinheiro.
                $p1->sacar(10.20);         // Saque de dinheiro.
                $p1->sacar(1500);          // Saque de dinehiro insuficiente de acordo o saldo do cliente.
                $p1->pagarMensal();        // Pagar mensalidade (pde ser exibida com algum comando de escrita no método pagarMensal()).
                $p1->fecharConta();        // Tentativa de fechar a conta (pode ser exibida uma msg da conta fechada no método fecharConta).

                $p2->abrirConta("CP");     // Tipo da conta (conta poupança).
                $p2->setDono("Creuza");    // Nome do dono da conta.
                $p2->setNumConta(79531);   // Nº da conta.  
                $p2->depositar(500);       // Depósito de dinheiro.
                $p2->sacar(100);           // Saque de dinheiro.
                $p2->sacar(1000);          // Saque de dinehiro insuficiente de acordo o saldo do cliente.
                $p2->pagarMensal();        // Pagar mensalidade (pde ser exibida com algum comando de escrita no método pagarMensal()).
                $p2->fecharConta();        // Tentativa de fechar a conta (pode ser exibida uma msg da conta fechada no método fecharConta).

                print_r($p1);              // Dados de Jubileu.
                print_r($p2);              // Dados de Creuza.
            ?>
        </pre>
    </body>
</html>
