<?php
    require("dao.php");
    $rgm=$_POST["rgm"];
    // Verifico se o RGM Existe
    try{
    $ret = conectar('localhost', 'root', '', 'backend');
    mysqli_set_charset ($ret, "utf8");
    $sql = "select * from alunos where rgm=$rgm";
    $consulta = mysqli_query($ret, $sql) or die(mysqli_error($con));;
    $registros = mysqli_num_rows($consulta);
    // Se encontrou o RGM
    if ($registros > 0){ 
    while($reg_consulta = mysqli_fetch_array($consulta)){
        $nome = $reg_consulta['nome'];
        $telefone = $reg_consulta['telefone'];
        $sexo = $reg_consulta['sexo'];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- Icon -->
    <link rel="shortcut icon" href="img/sistema.png" type="image/x-icon">
    <title>Alteração de Dados</title>
</head>
<body>
    <div class="container">
    <?php echo "<h3>Dados do RGM: $rgm </h3>"?>
    <form action="atualizacaoBD.php" method="POST">
        <input type="hidden" name="rgm" value="<?php echo $rgm; ?>">
        Nome: <input type="text" name="nome" value="<?php echo $nome; ?>">
        Telefone: <input type="numeric" name="telefone" value="<?php echo $telefone; ?>">
        Sexo: <input type="text" name="sexo" value="<?php echo $sexo; ?>">
        <input type="submit" value="Salvar">
    </form>
    <a href="informaRGMpAtualizar.php"><button>Voltar a tela anterior</button></a>
    <a href="index.php"><button>Voltar ao menu</button></a>
    </div>
</body>
</html>
<?php 
    }
    else{
        echo "<script> alert('RGM não encontrado!');location.href='informaRGMpAtualizar.php';</script>";
    }
    } catch (Exception $e) {
        echo 'Falha no acesso ao BD:'.$e->getMessage();
    }
?>