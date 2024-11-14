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

    if ($retorno > 0)
        echo "Esse aluno já existe";
    else{
        $sql = "insert into alunos (rgm, nome, telefone, sexo) values ('$rgm', '$nome', '$telefone', '$sexo')";
        $consulta = mysqli_query($ret,$sql);
        if($consulta)
            echo " Cadastro realizado com sucesso! ";
        else
            echo " Problema ao realizar o cadastro!";
    }
    } catch (Exception $e) {
        echo 'Falha na conexão: '.$e->getMessage();
    }
    echo '<br>';
    echo '<a href="formCadastroBD.php">Voltar ao Cadastro</a>';
?>
