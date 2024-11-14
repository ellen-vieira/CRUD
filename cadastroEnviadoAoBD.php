<?php
    require("dao.php");
    try{
    $ret = conectar('localhost', 'root', '', 'backend');
    mysqli_set_charset($ret, "utf8");

    $rgm = $_POST['rgm'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $sql = "select * from alunos where rgm=$rgm";
    $consulta = mysqli_query($ret, $sql);
    $retorno = mysqli_num_rows($consulta);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <?php
            if ($retorno > 0)
                echo "Esse aluno já existe";
            else{
                $sql = "insert into alunos (rgm, nome, telefone, sexo) values ('$rgm', '$nome', '$telefone', '$sexo')";
                $consulta = mysqli_query($ret,$sql);
                if($consulta)
                    echo "Cadastro realizado com sucesso!";
                else
                    echo "Problema ao realizar o cadastro!";
            }
            } catch (Exception $e) {
                echo 'Falha na conexão: '.$e->getMessage();
            }  
            echo '<a href="formCadastroBD.php"><button>Voltar</button></a>';
        ?>
    </div> 
</body>
</html>

