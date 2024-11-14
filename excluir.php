<?php
    // Entra na sessão já aberta
    session_start(); 
    // recebe o dado passado do PhP
    $rgm = $_SESSION['rgm']; 

    require("dao.php");
    $sql = "delete from alunos where rgm = $rgm";
    $con = conectar('localhost', 'root','','backend');
    mysqli_query($con, $sql) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- Icon -->
    <link rel="shortcut icon" href="img/sistema.png" type="image/x-icon">
    <title>Excluir</title>
</head>
<body>
    <div class="container">
        <?php
            // Verifica se a exclusão foi efetivada
            if(mysqli_affected_rows($con) > 0){
                echo "Aluno excluído com sucesso";
            }else
                echo "Aluno não excluído";
                echo '<a href="informaRGMpExcluir.php"><button>Voltar</button></a>';
                echo '<a href="index.php"><button>Voltar ao menu</button></a>';
            // Outra forma p chamar um programa Php
            // header("Location: informaRGMpExcluir.php"); 
        ?>
    </div>
</body>
</html>
