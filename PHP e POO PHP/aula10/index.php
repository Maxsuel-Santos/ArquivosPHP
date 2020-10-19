<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <style>
        body {
            text-align: center;
        }
        .invalido{
            color: red;
            font-weight: bolder;
            font-family: Arial, Helvetica, sans-serif;
        }
        .invalido:hover {
            text-decoration: underline;
        }
        .analizar {
            background-color: rgb(42, 42, 124);
            margin-top: 5px;
            width: 70px;
            height: 32px;
            cursor: pointer;
            box-shadow: 2px 2px 2px gray;
            color: white;
            font: bold 10pt Arial;
        }
    </style>
</head>
<body>
    <div>
        <form action="index.php" method="get">
            <p>
                Número: <input type="number" name="num" placeholder="Digite aqui"> <br>
                <fieldset> <legend>Operação</legend>
                    <input type="radio" name="oper" id="dobro" value="1" checked>
                    <label for="dobro">Dobro</label>
                    <input type="radio" name="oper" id="triplo" value="2">
                    <label for="triplo">Triplo</label>
                    <input type="radio" name="oper" id="raiz" value="3">
                    <label for="raiz">Raíz quadrada</label>
                </fieldset>
                <input type="submit" class="analizar" value="Calcular">
            </p>
        </form>

        <?php
            $n = isset($_GET["num"])?$_GET["num"]:0;
            $o = isset($_GET["oper"])?$_GET["oper"]:1;
            switch ($o) {
                case 1:
                    $r = $n * 2;
                    break;
                case 2:
                    $r = $n * 3;
                    break;
                case 3;
                    $r = sqrt($n); // $o ^ 0.5;  // $o ^ (1/2); 
                    break;
            }
            echo "<p>O resultado da operação foi: <span class='foco'>$r</span></p>";
        ?>

        <h2><strong>---------------------------------------------------------------------------</strong></h2>
        
        <form action="index.php" method="get">
            <p>
                Dia da semana: <input type="number" name="ds" min="2" max="8" required="" placeholder="2 a 8.">
                <input type="submit" class="analizar" value="Analizar">

                <?php
                    $d = isset($_GET["ds"])?$_GET["ds"]:0;
                    switch ($d) {
                        case 2:
                        case 3:
                        case 4:
                        case 5:
                        case 6:
                            echo "<p>Levante e vá estudar! :)   😎✌👍</p>";    
                            break;
                        case 7:
                        case 8:
                            echo "<p>Descanse, pequeno gafanhoto! ;)</p>";
                            break;
                        default:
                            echo "<p><span class='invalido'><em>Dia sa semana inválido! Tente entre 2 (Segunda) a 8 (Domingo).</em></span></p>";
                    }
                ?>
            </p>
        </form>
        
        <h2><strong>---------------------------------------------------------------------------</strong></h2>

        <form action="index.php" method="get">
            Selecione o estado:
            <select name="est">
                <option value="no" selected>Acre</option>
                <option value="ne">Alagoas</option>
                <option value="no">Amapá</option>
                <option value="no">Amazonas</option>
                <option value="ne">Bahia</option>
                <option value="ne">Ceará</option>
                <option value="co">Distrito Federal</option>
                <option value="sud">Espírito Santo</option>
                <option value="co">Goiás</option>
                <option value="ne">Maranhão</option>
                <option value="co">Mato Grosso</option>
                <option value="co">Mato Grosso do Sul</option>
                <option value="sud">Minas Gerais</option>
                <option value="no">Pará</option>
                <option value="ne">Paraíba</option>
                <option value="sul">Paraná</option>
                <option value="ne">Pernambuco</option>
                <option value="ne">Piauí</option>
                <option value="sud">Rio de Janeiro</option>
                <option value="ne">Rio Grande do Norte</option>
                <option value="sul">Rio Grande do Sul</option>
                <option value="no">Rondônia</option>
                <option value="no">Roraima</option>
                <option value="sul">Santa Catarina</option>
                <option value="sud">São Paulo</option>
                <option value="ne">Sergipe</option>
                <option value="no">Tocantins</option>
            </select>
            <input type="submit" class="analizar" value="Verificar">
        </form>

        <?php
            $est = isset($_GET["est"])?$_GET["est"]:0;
            switch ($est) {
                case 'no':
                    $reg = "Região Norte.";
                    break;
                case 'co';
                    $reg = "Região Centro-Oeste.";
                    break;
                case 'ne':
                    $reg = "Região Nordeste.";
                    break;
                case 'sul':
                    $reg = "Região Sul.";
                    break;
                case 'sud':
                    $reg = "Região Sudeste.";
                    break;
            }
            echo "Você mora na $reg";
        ?>
    </div>
</body>
</html>
