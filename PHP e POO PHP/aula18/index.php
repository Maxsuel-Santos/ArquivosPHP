<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>aula 18</title>
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>
            <pre>
                <?php
                    $n = array(3,5,8,2);
                    $n[4] = "Maxsuel"; // $n[] = "Maxsuel";
                    unset($n[2]); // remove um índece e seu respectivo valor
                    print_r($n);
                    
                    $a = range(10,20,2);
                    print_r($a);
                    
                    $c = range(5,20,2);
                    foreach($c as $v) {
                        echo "$v ";
                    }
                    
                    $v = array(7=>"M", 9=>"X",3=>1);
                    $v[] = 1;
                    print_r($v);
                    foreach ($v as $key) {
                        print("$key ");
                    }
                    
                    $pessoa = array("nome"=>"Maxsuel",
                                    "idade"=>15,
                                    "peso"=>45);
                    print_r($pessoa);
                    printf("%s têm %.0f anos e pesa KG %.2f.",$pessoa["nome"], $pessoa["idade"], $pessoa["peso"]);
                    foreach ($pessoa as $campo => $valor) {
                        echo "<br>O valor de $campo é $valor";
                    }
                    
                    $m = array(array("Max",10.00),
                               array("Jô",9.75),
                               array("Deb",9.90));
                    print_r($m)
                    
                ?>  
            </pre>     
        </div>
    </body>
</html>
