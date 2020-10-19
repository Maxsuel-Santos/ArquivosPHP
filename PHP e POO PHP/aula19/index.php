<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>aula 19</title>
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>
            <pre>
           <?php
                $v = array(2, 7, "M", "Y", 987);
                array_push($v, 8);
                array_push($v, "A");
                array_pop($v);
                array_unshift($v, "HELLO");
                array_unshift($v, 123);
                array_shift($v);
                sort($v); // rsort($v);     // asort($v);     // ksort($v);   
                var_dump($v);
                print_r($v);
                print(count($v));
           ?>
            </pre>
        </div>
    </body>
</html>
