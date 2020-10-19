<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <?php
        $txt = isset($_GET['t'])?$_GET['t']:"Texto genérico";
        $tam = isset($_GET['tam'])?$_GET['tam']:"12pt";
        $cor = isset($_GET['cor'])?$_GET['cor']:"#000000";
    ?>
    <style>
        #ex02 {
            text-align: center;
        }
        .texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <div>
         <form method="get" action="index.php">
            Número: <input type="number" name="v">
            <input type="submit" value="Calcular raíz">
        </form>
        <?php
            $valor = $_GET["v"];
            $raiz = number_format(sqrt($valor), 2);
            echo "<br>A raíz quadrada de $valor é <strong>$raiz</strong>";
            
            
            echo "<h2><p><strong>------------------"
            . "---------------------------------"
            . "------------------------------------</strong></p></h2>";
       ?>
        <form method="get" action="index.php" id="ex02">
            Nome: <input type="text" name="nome" placeholder="Seu nome">
            &nbsp;Ano de nascimento: <input type="number" name="ano" placeholder="Ano de nascimento"><br>
            <br>
            <fieldset>
                <legend>
                    Sexo
                </legend>
                <input type="radio" name="sexo" id="masc" value="homem">
                <label for="masc">Masculino</label>
                <input type="radio" name="sexo" id="femi" value="mulher" checked>
                <label for="femi">Feminino</label>
            </fieldset><br>
            <input type="submit" value="Enviar">

            <?php
                $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";
                $ano = isset($_GET["ano"])?$_GET["ano"]:"[Não informado]";
                $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Não informado]";
                $idade = date("Y") - $ano;
                echo "<p><strong>$nome é $sexo e tem/terá $idade anos</strong></p>";

                echo "<h2><p><strong>------------------"
            . "---------------------------------"
            . "------------------------------------</strong></p></h2>";
            ?>
        </form>

        <form action="index.php" method="get">
            <label for="itxt">Texto</label>
            <input type="text" name="t" id="itxt"> <br>
            <label for="itam">Tamanho</label>
            <select name="tam" id="itam">
                <option value="8pt">8</option>
                <option value="10pt">10</option>
                <option value="14pt">14</option>
                <option value="20pt">20</option>
                <option value="40pt">40</option>
            </select> <br>
            <label for="icor">Cor: </label>
            <input type="color" name="cor" id="icor"> <br>
            <input type="submit" value="Gerar">
        </form>

        <?php
            echo "<span class='texto'>$txt</span>";
        ?>
    </div>
</body>
</html>
