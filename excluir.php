<?php
    // Entra na sessão já aberta
    session_start(); 
    // recebe o dado passado do PhP
    $rgm = $_SESSION['rgm']; 

    require("dao.php");
    $sql = "delete from alunos where rgm = $rgm";
    $con = conectar('localhost', 'root','','backend');
    mysqli_query($con, $sql) or die(mysqli_error($con));
    // Verifica se a exclusão foi efetivada
    if(mysqli_affected_rows($con) > 0){
        echo "Aluno excluído com sucesso";
    }else
        echo "Aluno NÃO excluído II ";
        echo '<br>';
        echo '<a href="informaRGMpExcluir.php"> Voltar a tela de Exclusão </a>'. '<br><br>';
        echo '<a href="index.php"> Voltar ao Menu </a>';
    // Outra forma p chamar um programa Php
    // header("Location: informaRGMpExcluir.php"); 
?>