<?php
    // Abre uma sessão para enviar dados entre PhP
    session_start();
    // Recebe e trata dado da página anterior
    $rgm = filter_input (INPUT_GET, 'rgm', FILTER_SANITIZE_NUMBER_INT);
    $_SESSION['rgm'] = $rgm; // passa os dados para a sessão criada

    require("dao.php");
    $con = conectar('localhost', 'root','', 'backend');
    mysqli_set_charset($con, "utf8");
    $sql = "select * from alunos where rgm=$rgm";
    $consulta = mysqli_query($con, $sql) or die(mysqli_error($con));
    $registros = mysqli_num_rows($consulta);
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Confirmar Exclusão</title>
</head>
<body>
    <div class="customers">
    <?php
    // Se encontrou o RGM mostrará os dados e chamará
    if ($registros > 0){
    // A página que efetivará a exclusão no BD
        echo "<h1>Exclusão de Dados";
        echo "<h3>Dados do RGM: $rgm</h3>";
    ?>
    <table id="customers">
        <tr>
            <th>NOME</th>
            <th>TELEFONE</th>
            <th>SEXO</th>
        </tr>
    <?php
        while($reg_consulta = mysqli_fetch_array($consulta)) {
            echo "<tr>";
            echo "<td>". $reg_consulta ["nome"]."</td>";
            echo "<td>". $reg_consulta["telefone"] . "</td>";
            echo "<td align='center'>". $reg_consulta["sexo"]."</td>";
            echo "</tr>";
        }
    ?>
    </table>
    <?php
        echo '<a href="excluir.php?rgm=rgm"><button>Excluir Dados</button></a>';
    }
    else{
        echo 'Aluno não encontrado';
    }
    echo '<a href="informaRGMpExcluir.php"><button>Voltar a tela anterior</button></a>';
    echo '<a href="index.php"><button>Voltar ao MENU</button></a>';
    ?>
    </div>
</body>
</html>
    
