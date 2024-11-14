<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- Icon -->
    <link rel="shortcut icon" href="img/sistema.png" type="image/x-icon">
    <title>Conectando ao BD</title>
</head>
<?php 
    require('dao.php');
?>
<body>
    <div class="customers">
    <h3>Recebendo dados do BD</h3>
    <?php
        $ret = conectar('localhost', 'root', '', 'backend');
        mysqli_set_charset($ret, "utf8");
        $consulta = "select * from alunos order by rgm";
        $obj_consulta = mysqli_query($ret, $consulta) or die($mysqli_error);
    ?>
    <table id="customers">
        <tr>
            <th>RGM</th>
            <th>NOME</th>
            <th>TELEFONE</th>
            <th>SEXO</th>
        </tr>
        <?php
            while($reg_consulta = mysqli_fetch_array($obj_consulta)){
                echo "<tr>";
                echo "<td align='center'>". $reg_consulta["rgm"]."</td>";
                echo "<td>". $reg_consulta ["nome"]."</td>";
                echo "<td>". $reg_consulta["telefone"] . "</td>";
                echo "<td align='center'>". $reg_consulta["sexo"]."</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <br>
    <a href="index.php"><button>Voltar ao menu</button></a>
    </div>
</body>
</html>
